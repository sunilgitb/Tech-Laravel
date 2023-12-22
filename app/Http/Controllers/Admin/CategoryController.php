<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Auth;
use Str;
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


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Category access|Category create|Category edit|Category delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Category create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Category edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Category delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::latest()->get();

        return view('category.index',['categories'=>$categories]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('category.new', ['categories'=>$categories]);
    }

   
   

  
     public function store(Request $request)
     {
        
         // Validate the incoming request data
         $validator = Validator::make($request->all(), [
             'cat_name' => 'required',
            //  'cat_description' => 'required',
            //  'image' => 'nullable|image|max:5000|mimes:jpeg,jpg,png', // Adjusted validation rule for images
         ]);
     
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
     
         // File upload and storage logic
         if ($request->hasFile('cat_img')) {
             $image = $request->file('cat_img');
             $imageName = time() . '.' . $image->getClientOriginalExtension();
             $image->storeAs('public/post/images', $imageName);
             $imagePath = '/storage/post/images/' . $imageName;
         } else {
             $imagePath = null; // Set default value if no image is uploaded
         }
     
         // Check if the post exists
         $post = Category::find($request->input('id'));
     
         // Update the post with the validated data
         if ($post != null) {
             $post->update([
                 'user_id' => Auth::user()->id,
                 'cat_name' => $request->input('cat_name'),
                //  'cat_description' => $request->input('cat_description'),
                 'cat_img' => $imagePath, // Store the image path in the database
             ]);
     
             return redirect()->back()->with('success', 'Post updated successfully.');
         } else {
             // Post does not exist, create a new post
             Category::create([
                 'user_id' => Auth::user()->id,
                 'cat_name' => $request->input('cat_name'),
                //  'cat_description' => $request->input('cat_description'),
                 'cat_img' => $imagePath, // Store the image path in the database
             ]);
     
             return redirect()->back()->with('success', 'Category created successfully.');
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
        $post = Category::find($id);
        $posts = Category::orderBy('created_at', 'desc')->get();
    
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
    public function edit(Category $category)
    {
       return view('category.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->back()->withSuccess('Post updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->withSuccess('Category deleted !!!');
    }







}