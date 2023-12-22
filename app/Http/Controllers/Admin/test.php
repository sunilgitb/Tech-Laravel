<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
// use Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

 function store(Request $request)
{
    $data = $request->all();
    $data['user_id'] = Auth::user()->id;

    // Upload the image
    $image = $request->file('image');
    if ($image) {
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('public/post/images', $imageName);
        $data['image'] = '/storage/post/images/' . $imageName; // Store the path to the image in the database
    }

    Post::create($data);
    return redirect()->back()->withSuccess('Post created successfully !!!');
}


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
        $posts= Post::all();
        return view('post.new', ['posts'=>$posts]);
    }

    // public function posts(){
    //     // $posts = Post::select('id', 'title', 'description')->latest()->get();
    //     $posts= Post::latest()->get();

    //     foreach ($posts as $blog) {
    //         $blog->description = Str::limit($blog->description, 150);
    //     }

    //     $previous_record = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
    //      $next_record = Post::where('id', '>', $post->id)->orderBy('id')->first();
    
    //     return view('posts', compact('posts'));

    // }

    public function posts(){
        $posts = Post::latest()->get();
    
        foreach ($posts as $blog) {
            $blog->description = Str::limit($blog->description, 150);
        }
    
        $previous_record = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next_record = Post::where('id', '>', $post->id)->orderBy('id')->first();
        
        return view('posts', compact('posts', 'previous_record', 'next_record'));
    }
    

   

    // public function showMore(){
    //     $posts = Post::select('id', 'title', 'description')->latest()->limit(6)->get();

    //     foreach ($posts as $blog) {
    //         $blog->description = Str::limit($blog->description, 2000);
    //     }

    //     // $previous_record = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
    //     // $next_record = Post::where('id', '>', $post->id)->orderBy('id')->first();
    
    //     return view('frontend.blog.blog', compact('posts'));
    // }



public function showMore()
{
    $posts = Post::select('id', 'title', 'description', 'created_at')->latest()->limit(6)->get();
    
    foreach ($posts as $blog) {
        $blog->description = Str::limit($blog->description, 2000);
        $blog->url = route('post.show', ['title' => $blog->title]); // Add a URL property to each blog
        $blog->formatted_date = $blog->created_at->format('Y-m-d'); // Format the created_at date
    }
    
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
    // public function store(Request $request)
    // {
    //     $data= $request->all();
    //     $data['user_id'] = Auth::user()->id;
    //     $Post = Post::create($data);
    //     return redirect()->back()->withSuccess('Post created !!!');
    // }
//     public function store(Request $request)
// {
//     $data = $request->all();
//     $data['user_id'] = Auth::user()->id;

//     // Upload the image
//     $image = $request->file('image');
//     $imageName = time() . '.' . $image->getClientOriginalExtension();
//     $image->move(public_path('post/images'), $imageName);;

    

//     // $data['image'] = $imageName;

//     $Post = Post::create($data);

//     return redirect()->back()->withSuccess('Post created successfully !!!');
// }


// public function store(Request $request)
// {
//     $data = $request->all();
//     $data['user_id'] = Auth::user()->id;

//     // Upload the image
//     $image = $request->file('image');
//     if ($image) {
//         $imageName = time() . '.' . $image->getClientOriginalExtension();
//         $image->move(public_path('post/images'), $imageName);
//         $data['image'] = $imageName;
//     }

//     Post::create($data);

//     return redirect()->back()->withSuccess('Post created successfully !!!');
// }


// public function store(Request $request)
// {
//     $data = $request->all();

//     // return $data;
//     $data['user_id'] = Auth::user()->id;

//     // Upload the image
//     $image = $request->file('image');
//     if ($image) {
//         $imageName = time() . '.' . $image->getClientOriginalExtension();
//         $image->move(storage_path('post/images'), $imageName);
//         $data['image'] = 'storage/post/images/' . $imageName; // Store the path to the image in the database
//     }

//     Post::create($data);
//     return redirect()->back()->withSuccess('Post created successfully !!!');
// }



// public function store(Request $request)
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


// public function store(Request $request)
// {
//     $data = $request->all();
//     $data['user_id'] = Auth::user()->id;

//     // Upload the image
//     $image = $request->file('image');
//     if ($image) {
//         $imageName = time() . '.' . $image->getClientOriginalExtension();
//         $image->move(public_path('post/images'), $imageName);
//         $data['image'] = '/storage/post/images/' . $imageName; // Store the path to the image in the database
//     }

//     Post::create($data);
//     return redirect()->back()->withSuccess('Post created successfully !!!');
// }



// public function store(Request $request)
// {
//     $request->validate([
//         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
//         // Add other validations for your form fields if needed
//     ]);

//     $data = $request->all();
//     $data['user_id'] = Auth::user()->id;

//     // Upload the image
//     if ($request->hasFile('image')) {
//         $imagePath = $request->file('image')->store('public/post/images');
//         // Get the file name with extension
//         $imageName = basename($imagePath);
//         $data['image'] = '/storage/post/images/' . $imageName; // Store the path to the image in the database
//     }

//     // Create a new post with the data
//     $post = Post::create($data);

//     return redirect()->back()->withSuccess('Post created successfully!');
// }


// public function store(Request $request)
// {
//     // Validate the incoming request data
//     $validator = Validator::make($request->all(), [
//         'title' => 'required',
//         'description' => 'required',
//         'image' => 'required|file|max:5000|mimes:pdf,doc,docx,jpeg,jpg,png', // Adjusted validation rule for images
//     ]);

//     if ($validator->fails()) {
//         return redirect()->back()->withErrors($validator)->withInput();
//     }

//     // File upload and storage logic
//     if ($request->hasFile('image')) {
//         $image = $request->file('image');
//         $imageName = time() . '.' . $image->getClientOriginalExtension();
//         $image->storeAs('public/post/images', $imageName);
//         $imagePath = '/storage/post/images/' . $imageName;
//     } else {
//         $imagePath = null; // Set default value if no image is uploaded
//     }

//     // Create the post with the validated data
//     Post::create([
//         'user_id' => Auth::user()->id,
//         'title' => $request->input('title'),
//         'description' => $request->input('description'),
//         'image' => $imagePath, // Store the image path in the database
//     ]);

//     return redirect()->back()->with('success', 'Post submitted successfully.');
// }




// public function store(Request $request)
// {
//     // Validate the incoming request data
//     $validator = Validator::make($request->all(), [
//         'title' => 'required',
//         'description' => 'required',
//         'image' => 'required|file|max:5000|mimes:pdf,doc,docx,jpeg,jpg,png', // Adjusted validation rule for images
//     ]);

//     if ($validator->fails()) {
//         return redirect()->back()->withErrors($validator)->withInput();
//     }

//     // File upload and storage logic
//     if ($request->hasFile('image')) {
//         $image = $request->file('image');
//         $imageName = time() . '.' . $image->getClientOriginalExtension();
//         $image->storeAs('public/post/images', $imageName);
//         $imagePath = '/storage/post/images/' . $imageName;
//     } else {
//         $imagePath = null; // Set default value if no image is uploaded
//     }

//     // Allow specific HTML tags in the description
//     $allowedTags = '<h2><p>';
//     $filteredDescription = strip_tags($request->input('description'), $allowedTags);

//     // Create the post with the validated data
//     Post::create([
//         'user_id' => Auth::user()->id,
//         'title' => $request->input('title'),
//         'description' => $filteredDescription, // Store the filtered description in the database
//         'image' => $imagePath, // Store the image path in the database
//     ]);

//     return redirect()->back()->with('success', 'Post submitted successfully.');
// }


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
    public function edit(Post $post)
    {
       return view('post.edit',['post' => $post]);
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
    
        // Retrieve the next and previous posts
        $nextPost = Post::where('id', '>', optional($post)->id)->orderBy('id', 'asc')->first();
        $previousPost = Post::where('id', '<', optional($post)->id)->orderBy('id', 'desc')->first();
    
        // Pass the post data and next/previous posts to the view
        return view('frontend.blog.show-post', compact('post', 'nextPost', 'previousPost'));
    }

// public function showPostTitle($title)
// {
//     // Retrieve the post by title from the database
//     $post = Post::where('title', $title)->firstOrFail();
    
//     // Retrieve the next and previous posts
//     $nextPost = Post::where('id', '>', optional($post)->id)->orderBy('id', 'asc')->first();
//     $previousPost = Post::where('id', '<', optional($post)->id)->orderBy('id', 'desc')->first();
    
//     // Pass the post data and next/previous posts to the view
//     return view('frontend.blog.show-post', compact('post', 'nextPost', 'previousPost'));
// }

// public function showPost($id)
// {
//     // $postTitle = Post::where('title', $title)->firstOrFail();
//     $post = Post::findOrFail($id);
    
//     return view('frontend.blog.show-post-single', compact('post'));
// }

// public function showPost($title) {
//     $blog = Post::where('title', $title)->first();
//     if (!$blog) {
//         return abort(404);
//     }

//      // Retrieve the next and previous posts
//      $nextPost = Post::where('id', '>', optional($blog)->id)->orderBy('id', 'asc')->first();
//      $previousPost = Post::where('id', '<', optional($blog)->id)->orderBy('id', 'desc')->first();
 
//      // Pass the post data and next/previous posts to the view
//      return view('frontend.blog.show-post-single', compact('blog', 'nextPost', 'previousPost'));

    
// }


public function showPost($title) {
    // Replace URL-encoded characters to their original form
    $title = str_replace(' ', '-', $title);
    
    // Retrieve the post by title from the database
    $blog = Post::where('title', $title)->firstOrFail();
    // $decodedTitle = urldecode($title);

    // Retrieve the blog post based on the decoded title
    // $blog = Post::where('title', $decodedTitle)->first();

    if (!$blog) {
        return abort(404);
    }

    // Retrieve the next and previous posts
    $nextPost = Post::where('id', '>', optional($blog)->id)->orderBy('id', 'asc')->first();
    $previousPost = Post::where('id', '<', optional($blog)->id)->orderBy('id', 'desc')->first();

    // Pass the post data and next/previous posts to the view
    return view('frontend.blog.show-post-single', compact('blog', 'nextPost', 'previousPost'));
}

// public function showPost($title)
// {
//     // Replace URL-encoded characters to their original form
//     $decodedTitle = urldecode($title);
//     // Generate the slug from the decoded title
//     $slug = Str::slug($decodedTitle, '-');
//     // Retrieve the blog post based on the slug
//     $blog = Post::where('title', $slug)->first();
//     if (!$blog) {    
//         return abort(404);
//     }
//     // Retrieve the next and previous posts
//     $nextPost = Post::where('id', '>', optional($blog)->id)->orderBy('id', 'asc')->first();
//     $previousPost = Post::where('id', '<', optional($blog)->id)->orderBy('id', 'desc')->first();
//     // Pass the post data and next/previous posts to the view
//     return view('frontend.blog.show-post-single', compact('blog', 'nextPost', 'previousPost'));
// }



public function newPost()
{
    $newpost = Post::select('id', 'title', 'description')->latest()->limit(6)->get();
    foreach ($newpost as $blog) {
        $blog->description = Str::limit($blog->description, 2000);
        $blog->url = route('post.show', ['title' => $blog->title]); // Add a URL property to each blog
    }
    
    return view('frontend.blog.blog-new', compact('newpost'));
}

}