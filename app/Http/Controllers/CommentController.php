<?php

// CommentsController.php (app\Http\Controllers\CommentsController.php)

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
use Auth;

class CommentController extends Controller
{
   public function store2(Request $request)
{
    $validator = Validator::make($request->all(), [
        // 'user_id' => 'required',
        'content' => 'required',
        'post_id' => 'required|exists:posts,id'
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    $comment = Comment::create([
        'user_id' => Auth::Id(),
        'content' => $request->content
    ]);

    $post = Post::find($request->post_id);
    $post->comments()->save($comment);

    return response()->json($post);
}


public function storeTest(Request $request, Post $post)
{
    $existingComment = $post->comments()->where('user_id', auth()->id())->first();

    if ($existingComment) {
        // If the user has already commented on this post, update the comment content
        $existingComment->update([
            'content' => $request->input('content'),
        ]);
    } else {
        // Validate the incoming request data
        $request->validate([
            'content' => 'required|string|max:255', // Modify validation rules according to your requirements
        ]);

        // Create a new comment
        $comment = new Comment([
            'content' => $request->input('content'),
        ]);

        // Associate the comment with the post and save it
        $post->comments()->save($comment);

        // Increment the comment count for the post
        $post->increment('comment_count');
    }

    return redirect()->back()->with('success', 'Comment added successfully!');
}



public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'content' => 'required',
        'post_id' => 'required|exists:posts,id'
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    $comment = Comment::create([
        'user_id' => Auth::id(),
        'name' => $request->name,
        'email' => $request->email,
        'content' => $request->content,
        'created_at' => Carbon::now('Asia/Kolkata'),
    ]);

    $post = Post::find($request->post_id);
    $post->comments()->save($comment);

    return redirect()->back()->withSuccess('Comment added successfully!');
}


public function showComments(){

// Retrieve the comment from the database
$comment = Comment::find('24');

// Convert the created_at timestamp to Asia/Kolkata timezone
$created_at = Carbon::parse($comment->created_at)->timezone('Asia/Kolkata');

// Display the converted timestamp
echo $created_at;
}
}