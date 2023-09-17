<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\User\UpdateRequest;
use App\Http\Requests\Site\CreateRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function master(){
        return view('layouts.site');
    }
    public function singleblog($id){

        $blog = Post::find($id);
        if(!$blog){
            abort(404);
        }
        $comments = Comment::with('replies', 'user')->where('post_id', $blog->id)->paginate(3);
        $latestpost = Post::latest()->limit(7)->paginate(4);
        $tags = $blog->tags;
        // $tags = Tag::latest()->get();
        
        return view('site.singleblog', compact('blog', 'comments','latestpost','tags' ));
    }

      public function index(){

        $blogs = Post::with('tags','User','Category','image','comments')->where('status' ,Post::PUBLISH)->paginate(4);;
        
        
        // dd($blogs);
        return view('site.index', compact('blogs'));

    }
    
    
    
    
    
    
    
    public function edituser(){
      
        $user = auth()->user();

     return view('auth.edituser', compact('user'));
   }
    
   
   
   
   
   public function updateuser(UpdateRequest $request){
       
     
        $user = auth()->user();

        if(!$request->password){
          $user->update([
           
              'name' => $request->name,
              'email' => $request->email
             
      
            ]);
        }
        else{
          $user->update([
           
              'name' => $request->name,
              'email' => $request->email,
              'password' => Hash::make($request->password),
              'password_confirmation' => Hash::make($request->password),
            ]);
        }
     
      $request->session()->flash('alert-success',' User Updated Successfully');
     
     return view('auth.edituser', compact('user'))->with('alert-success');
   }
    


}
