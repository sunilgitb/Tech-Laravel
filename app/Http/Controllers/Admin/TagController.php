<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;
use Auth;
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


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Tag access|Tag create|Tag edit|Tag delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Tag create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Tag edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Tag delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags= Tag::latest()->get();

        return view('tag.index',['tags'=>$tags]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags= Tag::all();
        return view('tag.new', ['tags'=>$tags]);
    }

   
   

  
    public function store(Request $request)
{
    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'tag_name' => 'required',
        // 'slug' => 'required',
   
    ]);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    // File upload and storage logic
    // Check if the post exists
    $post = Tag::find($request->input('id'));
    // Update the post with the validated data
    if ($post != null) {
        $post->update([
            'user_id' => Auth::user()->id,
            'tag_name' => $request->input('tag_name'),
            'slug' => Str::slug($request->tag_name),
        ]);
        return redirect()->back()->with('success', 'Tag updated successfully.');
    } else {
        // Post does not exist, create a new post
        Tag::create([
            'user_id' => Auth::user()->id,
            'tag_name' => $request->input('tag_name'),
            'slug' =>  Str::slug($request->tag_name),
        ]);
        return redirect()->back()->with('success', 'Tag created successfully.');
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
        $tag = Tag::find($id);
        $posts = Tag::orderBy('created_at', 'desc')->get();
    
        $postIndex = $posts->search(function($item, $key) use ($id) {
            return $item->id === $id;
        });
        
        $previousPost = ($postIndex > 0) ? $posts[$postIndex - 1] : null;
        $nextPost = ($postIndex < count($posts) - 1) ? $posts[$postIndex + 1] : null;
    
        return view('blog.show', compact('tag', 'previousPost', 'nextPost'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        
       return view('tag.edit',['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->all());
        return redirect()->back()->withSuccess('Tag updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->back()->withSuccess('Tag deleted !!!');
    }







}