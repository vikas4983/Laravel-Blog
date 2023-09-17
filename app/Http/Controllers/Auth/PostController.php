<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Posts\CreateRequest;
use App\Http\Requests\Auth\Posts\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\fileExists;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user', 'category', 'tags', 'image')->get();
        //dd($posts);
        return view('auth.posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('auth.posts.create', compact('categories'), compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)

    {
       
        if ($file = $request->file('file') )
         {
            
        
        try {
               $fileName = $this->uploadFile($file);
                $image = $this->storeImage($fileName);
            
                // if($file = $request->file('file')){
            //     $fileName = rand(100, 1000).time().$file->getClientOriginalName();
            //     $filePath = public_path('/storage/auth/posts/');
            //     $file->move($filePath,$fileName);
            //     $image = Image::create([
            //         'image' =>  $fileName,
            //         'type'  => Image::POST_IMAGE
            //     ]);
            // }


            DB::beginTransaction();
            $post = Post::create([
                'image_id' => $image->id,
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
                'category_id' => $request->category
            ]);

            foreach ($request->tags as $tag) {
                $post->tags()->attach($tag);
            }
            DB::commit();

        } 
        catch (\Exception $ex) 
        {
            DB::rollBack();
            dump($ex->getMessage());
            return back()->withErrors($ex->getMessage());
        }
    }
        else{
         try {
    
               DB::beginTransaction();
                $post = Post::create([
                   
                    'user_id' => auth()->user()->id,
                    'title' => $request->title,
                    'description' => $request->description,
                    'status' => $request->status,
                    'category_id' => $request->category
                ]);
    
                foreach ($request->tags as $tag) {
                    $post->tags()->attach($tag);
                }
                DB::commit();
    
            } 
            catch (\Exception $ex) 
            {
                DB::rollBack();
                dump($ex->getMessage());
                return back()->withErrors($ex->getMessage());
            }
    
        }
        $request->session()->flash('success',);
        $msg = "Post Created Successfully!";
        return redirect('auth/posts')->with('success', $msg);

        //************************************************************** */




        // try {  ****** Method 2
        //     // this is used because post ot tags are dependent for each other
        //     // if Post is create and tags are not create so DB::transaction automatically 
        //     // rollback of post 
        //     DB::transaction(function () use ($request) {

        //         $post = Post::create([
        //             'user_id' => auth()->user()->id,
        //             'title' => $request->title,
        //             'description' => $request->description,
        //             'status' => $request->status,
        //             'category_id' => $request->category
        //         ]);
        //         foreach ($request->tags as $tag) {
        //             $post->tags()->attach($tag);
        //         }
        //     });
        // } catch (\Exception $ex) {
        //     dd($ex);
        //     return back()->withErrors($ex->getMessage());
        // }

        //return view('auth.dashboard');
    
        }
    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort('404');
        }
        return view('auth.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('auth.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest  $request, Post $post)
    {
        if ($file = $request->file('file')) {
            $imageName = null;
            if ($post->image) {
                $imageName = $post->image->image;
                $imagePath = public_path('storage/auth/posts/');
                if (file_exists($imagePath . $imageName)) {

                    unlink($imagePath . $imageName);
                }
            }
            $fileName = $this->uploadFile($file);

            $post->image->update([
                'image' => $fileName
            ]);
        }
        $post->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'category_id' => $request->category
        ]);
        // foreach ($request->tags as $tag) {
        //     $post->tags()->attach($tag);
        //     if (file_exists($post)) {

        //         unlink($post->tags);
        //     }
        //}
        $request->session()->flash('success',);
        $msg = "Post Updated Successfully!";
        return redirect('auth/posts')->with('success', $msg);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->delete();
        // $request->session()->flash('alert-success', 'Post Updated Successfully');
        $request->session()->flash('danger',);
        $msg = "Post Deleted Successfully!";
        return redirect('auth/posts')->with('danger', $msg);
    }


    private function uploadFile($file)
    {
       
        $fileName = rand(100, 1000) . time() . $file->getClientOriginalName();
        $filePath = public_path('/storage/auth/posts/');
        $file->move($filePath, $fileName);
        return $fileName;
    }

    private function storeImage($fileName)
    {
        if($fileName){
            $image = Image::create([
                'image' =>  $fileName,
                'type'  => Image::POST_IMAGE
            ]);
            return $image;
        }
        
        
    }
}
