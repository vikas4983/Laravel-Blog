<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CreateRequest;
use App\Models\Comment;
use App\Models\Comment_Reply;
use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postcomment(Request $request, $id)
    {

        if (auth()->check()) {

            $post = Post::find($id);
            if (!$post) {
                return back()->withErrors('Unable to find the post, please refresh the webpage');
            }
           
            $comment = Comment::create([
                'user_id' => auth()->user()->id,
                'post_id'  => $id,
                'comment' => $request->comment,
            ]);
        }
        $msg = "congratulations your comment successfully uploaded!, It will be visible after approval by Admin.";
        return back()->with('success', $msg);
    }


    public function commentreply(Request $request, $id)
    {
        if (auth()->check()){

            $comment = Comment::find($id);
            if(! $comment){
                return back()->withErrors('Unable to find the post, please refresh the webpage');
            }
        }

       
        Reply::create([
            'user_id' => auth()->user()->id,
            'comment_id'  => $id,
            'reply' => $request->reply,
        ]);
     
        $msg = "congratulations your Reply on Comment successfully uploaded!, It will be visible after approval by Admin. ";
        return back()->with('success', $msg);
    }
    
    public function deletecommentreply(Request $request, $id) {
       //dd($id);
        
       
       $reply = Reply::find($id);
        $reply->delete($id);
        $msg = "congratulations your Reply Deleted successfully uploaded!";
        return back()->with('success', $msg);

    }


   
}
