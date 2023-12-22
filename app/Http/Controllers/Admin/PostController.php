<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;
use Auth;
use DB;  
use Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

//  function store(Request $request)
// {
//     $data = $request->all();
//     $data['user_id'] = Auth::user()->id;

//     // Upload the image
//     $image = $request->file('image');
//     if ($image) {
//         $imageName = time() . '.' . $image->getClientOriginalExtension();
//         $imagePath = $image->storeAs('public/post/images', $imageName);
//         $data['image'] = '/storage/post/images/' . $imageName; // Store the path to the image in the database
//     }

//     Post::create($data);
//     return redirect()->back()->withSuccess('Post created successfully !!!');
// }


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Post access|Post create|Post edit|Post delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Post create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Post edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Post delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Post= Post::latest()->get();

        return view('post.index',['posts'=>$Post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts= Post::all();
        return view('post.new', ['posts'=>$posts, 'categories' => $categories, 'tags' => $tags]);
    }



    public function posts(){
        $posts = Post::latest()->get();
    
        foreach ($posts as $blog) {
            $blog->description = Str::limit($blog->description, 150);
        }
    
        $previous_record = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next_record = Post::where('id', '>', $post->id)->orderBy('id')->first();
        
        return view('posts', compact('posts', 'previous_record', 'next_record'));
    }
    

   

 

public function showMore()
{

    
    // $posts = Post::select('id', 'title', 'image', 'description', 'created_at', 'slug')->whereNotNull('slug')->latest()->paginate(6);
    $posts = Post::with('user', 'comments', 'category')->whereNotNull('slug')->latest()->limit(6)->paginate(6);
    // dd($posts);
     
    $posts->each(function ($blog) {
        $blog->description = Str::limit($blog->description, 2000);
        $blog->url = route('post.show', ['title' => $blog->title]); // Add a URL property to each blog
        $blog->formatted_date = $blog->created_at->format('Y-m-d'); // Format the created_at date
    });
    return view('frontend.blog.blog', compact('posts'));
}

   

  

 public function nextBlog(){
    
        return view('frontend.blog.next-blog');
    }
    public function previousBlog(){
        return view('frontend.blog.previous-blog');
    }
    public function showBlog($id)
    {
        $post = Post::findOrFail($id);

        return view('frontend.blog.show', compact('post'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    


    public function store(Request $request)
{
    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'title' => 'required',
        'meta_title' => 'required',
        'meta_description' => 'required',
        'meta_keywords' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:5000|mimes:jpeg,jpg,png',
    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    // Check if the post exists
    $post = Post::find($request->input('id'));
    // File upload and storage logic
    if ($request->hasFile('image')) {
        // Remove old image if it exists
        if ($post && $post->image) {
            $oldImagePath = public_path($post->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/post/images', $imageName);
        $imagePath = '/storage/post/images/' . $imageName;
    } else {
        $imagePath = ($post) ? $post->image : null;
    }
    // Update or create the post with the validated data
    if ($post) {
        $post->update([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'tag_id' => $request->input('tag_id'),
            'cat_id' => $request->input('cat_id'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Post updated successfully.');
    } else {
        // Post does not exist, create a new post
        Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'tag_id' => $request->input('tag_id'),
            'cat_id' => $request->input('cat_id'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Post created successfully.');
    }
}


     public function store6(Request $request)
     {
         // Validate the incoming request data
         $validator = Validator::make($request->all(), [
             'title' => 'required',
             'meta_title' => 'required',
             'meta_description' => 'required',
             'meta_keywords' => 'required',
             'description' => 'required',
             'image' => 'nullable|image|max:5000|mimes:jpeg,jpg,png',
         ]);
     
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
     
         // File upload and storage logic
         $imagePath = null;
         if ($request->hasFile('image')) {
             $image = $request->file('image');
             $imageName = time() . '.' . $image->getClientOriginalExtension();
             $image->storeAs('public/post/images', $imageName);
             $imagePath = '/storage/post/images/' . $imageName;
         }
     
         // Check if the post exists
         $post = Post::find($request->input('id'));
     
         // Update the post with the validated data
         if ($post != null) {
             $post->user_id = Auth::user()->id;
             $post->title = $request->input('title');
             $post->slug = Str::slug($request->input('title'));
             $post->meta_title = $request->input('meta_title');
             $post->meta_description = $request->input('meta_description');
             $post->meta_keywords = $request->input('meta_keywords');
             $post->tag_id = $request->input('tag_id');
             $post->cat_id = $request->input('cat_id');
             $post->description = $request->input('description');
             
             // Update the image only if a new image is uploaded
             if ($imagePath) {
                 // Delete old image if it exists
                 if ($post->image) {
                     $oldImagePath = public_path($post->image);
                     if (file_exists($oldImagePath)) {
                         unlink($oldImagePath);
                     }
                 }
                 $post->image = $imagePath;
             }
     
             $post->save();
             return redirect()->back()->with('success', 'Post updated successfully.');
         } else {
             // Post does not exist, create a new post
             $newPost = [
                 'user_id' => Auth::user()->id,
                 'title' => $request->input('title'),
                 'slug' => Str::slug($request->input('title')),            
                 'meta_title' => $request->input('meta_title'),
                 'meta_description' => $request->input('meta_description'),
                 'meta_keywords' => $request->input('meta_keywords'),
                 'tag_id' => $request->input('tag_id'),
                 'cat_id' => $request->input('cat_id'),
                 'description' => $request->input('description'),
                 'image' => $imagePath,
             ];
     
             Post::create($newPost); 
             
             return redirect()->back()->with('success', 'Post created successfully.');
         }
     }
     

public function store3(Request $request)
{
    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'title' => 'required',
        'meta_title' => 'required',
        'meta_description' => 'required',
        'meta_keywords' => 'required',
        'description' => 'required',
       

        'image' => 'nullable|image|max:5000|mimes:jpeg,jpg,png',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // File upload and storage logic
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/post/images', $imageName);
        $imagePath = '/storage/post/images/' . $imageName;

        // Delete old image if it exists
        if ($request->input('old_image')) {
            $oldImagePath = public_path($request->input('old_image'));
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }
    } else {
        $imagePath = $request->input('old_image');
    }

    // Check if the post exists
    $post = Post::find($request->input('id'));


    // Update the post with the validated data
    if ($post != null) {
        $post->update([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'tag_id' => $request->input('tag_id'),
            'cat_id' => $request->input('cat_id'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Post updated successfully.');
    } else {
        // Post does not exist, create a new post

        Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),            
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'tag_id' => $request->input('tag_id'),
            'cat_id' => $request->input('cat_id'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]); 
        
        return redirect()->back()->with('success', 'Post created successfully.');
    }
}




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $posts = Post::orderBy('created_at', 'desc')->get();
    
        $postIndex = $posts->search(function($item, $key) use ($id) {
            return $item->id === $id;
        });
        
        $previousPost = ($postIndex > 0) ? $posts[$postIndex - 1] : null;
        $nextPost = ($postIndex < count($posts) - 1) ? $posts[$postIndex + 1] : null;
    
        return view('blog.show', compact('post', 'previousPost', 'nextPost'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) {

                $categories = Category::all();
                $tags = Tag::all();
                // dd($categories, $tags);
            return view('post.edit', [
                'post' => $post,
                'categories' => $categories,
                'tags' => $tags
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->back()->withSuccess('Post updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Post deleted !!!');
    }


    public function showPostTitle($title)
    {

        // Retrieve the post by title from the database
        $post = Post::where('title', $title)->firstOrFail();
      $blogPost = Post::select('title', 'image')->latest()->limit(5)->get();
      $relatedPosts = Post::select('id', 'title', 'description', 'image')->inRandomOrder()->limit(4)->get();

        // Retrieve the next and previous posts
        $nextPost = Post::where('id', '>', optional($post)->id)->orderBy('id', 'asc')->first();
        $previousPost = Post::where('id', '<', optional($post)->id)->orderBy('id', 'desc')->first();
    
        // Pass the post data and next/previous posts to the view
        return view('frontend.blog.show-post', compact('post','blogPost', 'nextPost', 'previousPost', 'relatedPosts'));
    }




public function showPost($slug) {

    // Replace URL-encoded characters to their original form
//      $decodedTitle = urldecode($title);

//  $blog = Post::where('title', $decodedTitle)->first();
    $blog = Post::where('slug', $slug)->firstOrFail();
    $latestPosts = Post::select('id', 'title', 'image', 'description', 'created_at', 'slug')->whereNotNull('slug')->latest()->limit(5)->get();
    // dd($latestPosts);
    
    // dd($blog);
    
    //  $blogPost = Post::select('title', 'image', 'slug')
;
    // dd($blog);
   
//  $blogPost = Post::select('title', 'image', 'slug')
//                 ->whereNotNull('slug')
//                 ->latest()
//                 ->limit(5)
//                 ->get();

//     if (!$blog) {
//         return abort(404);
//     }
   $relatedPosts = Post::select('id', 'title', 'description', 'image', 'slug')
                ->whereNotNull('slug')
                ->inRandomOrder()
                ->limit(4)
                ->get();


$nextPost = Post::whereNotNull('slug')
                ->where('id', '>', optional($blog)->id)
                ->orderBy('id', 'asc')
                ->first();

$previousPost = Post::whereNotNull('slug')
                    ->where('id', '<', optional($blog)->id)
                    ->orderBy('id', 'desc')
                    ->first();
   

    // Pass the post data and next/previous posts to the view
    return view('frontend.blog.show-post-single', compact('blog', 'latestPosts', 'relatedPosts', 'previousPost', 'nextPost'));
}


    
    public function searchPost(Request $request)
    { 
    
    $query = $request->input('query');  

    $posts = Post::whereNotNull('slug')->where('title', 'like', '' . $query . '%')
                //  ->orWhere('description', 'like', '%' . $query . '%')
                 ->take(5)->get();

                 return response()->json($posts);
}



public function showPostAutosuggest($slug){
    $post = Post::where('slug', $slug)->firstOrFail();

    $relatedPosts = Post::select('id', 'title', 'description', 'image','slug')->whereNotNull('slug')->inRandomOrder()->limit(4)->get();
    $blogPost = Post::select('title', 'image','slug')->whereNotNull('slug')->latest()->limit(5)->get();
    $latestPosts = Post::select('id', 'title', 'image', 'description', 'created_at', 'slug')->whereNotNull('slug')->latest()->limit(5)->get();
    // Retrieve the next and previous posts
    $nextPost = Post::whereNotNull('slug')->where('id', '>', optional($post)->id)->orderBy('id', 'asc')->first();
    $previousPost = Post::whereNotNull('slug')->where('id', '<', optional($post)->id)->orderBy('id', 'desc')->first();
    return view('frontend.autosuggest', compact('post', 'relatedPosts', 'nextPost', 'previousPost', 'blogPost', 'latestPosts'));
}


public function generateSlugTest()
{
    $posts = Post::select('slug', 'title', 'description', 'id', 'image')->latest()->limit(12)->get();
// dd($posts);
    return view('test-slug', compact('posts'));
}



public function deleteAllPosts(Request $request)  
{  
    $ids = $request->ids;  
    DB::table("posts")->whereIn('id',explode(",",$ids))->delete();  
    return response()->json(['success'=>"Products Deleted successfully."]);  
}  



public function indexPost()  
{  
    $posts = DB::table("posts")->get();  
    return view('post.delete-all-posts', compact('posts'));  
}  



public function storePosts(Request $request) {
    $validator = Validator::make($request->all(), [
        'title' => 'required',
        'meta_title' => 'required',
        'meta_description' => 'required',
        'meta_keywords' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:5000|mimes:jpeg,jpg,png',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Retrieve the post or create a new instance
    $post = Post::find($request->input('id'));
    if (!$post) {
        $post = new Post();
    }

    // File upload and storage logic
    if ($request->hasFile('image')) {
        // Remove old image if it exists
        if ($post->image) {
            $oldImagePath = public_path($post->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/post/images', $imageName);
        $imagePath = '/storage/post/images/' . $imageName;
    } else {
        $imagePath = ($post->image) ? $post->image : null;
    }

    // Update or create the post with the validated data
    $post->user_id = Auth::user()->id;
    $post->title = $request->input('title');
    $post->slug = Str::slug($request->input('title'));
    $post->meta_title = $request->input('meta_title');
    $post->meta_description = $request->input('meta_description');
    $post->meta_keywords = $request->input('meta_keywords');
    $post->tag_id = $request->input('tag_id');
    $post->cat_id = $request->input('cat_id');
    $post->description = $request->input('description');
    $post->image = $imagePath;
    $post->save();

    return redirect()->back()->with('success', 'Post ' . ($request->input('id') ? 'updated' : 'created') . ' successfully.');
}



public function updatePosts(Request $request, $postId)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required',
        'meta_title' => 'required',
        'meta_description' => 'required',
        'meta_keywords' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:5000|mimes:jpeg,jpg,png',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Find the post by ID
    $post = Post::find($postId);

    if (!$post) {
        return redirect()->back()->with('error', 'Post not found.');
    }

    // File upload and storage logic
    if ($request->hasFile('image')) {
        // Remove old image if it exists
        if ($post->image) {
            $oldImagePath = public_path($post->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/post/images', $imageName);
        $imagePath = '/storage/post/images/' . $imageName;
    } else {
        $imagePath = $post->image;
    }

    // Update the post with the validated data
    $post->title = $request->input('title');
    $post->slug = Str::slug($request->input('title'));
    $post->meta_title = $request->input('meta_title');
    $post->meta_description = $request->input('meta_description');
    $post->meta_keywords = $request->input('meta_keywords');
    $post->tag_id = $request->input('tag_id');
    $post->cat_id = $request->input('cat_id');
    $post->description = $request->input('description');
    $post->image = $imagePath;
    $post->save();

    return redirect()->back()->with('success', 'Post updated successfully.');
}


}