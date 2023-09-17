@extends('layouts.auth')
@section('title', 'View Post');
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="card card-default">
            <div class="card-header">
                <h2>View Post </h2>
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h2>Posts</h2>
                    <br>
                    {{-- @dd($posts) --}}
                    {{-- @if(count ($posts)> 0 ) --}}
                    <table class="table" id="posts" class="display nowrap" width="100%">
                    
                        <tbody>
                            
                        <tr>
                            <th scope="col">#</th>
                            <td>{{ $post->id }}</td>
 
                        </tr>
                           
                        <tr><th scope="col">User</th>
                            <td>{{ $post->user->name }}</td></tr>
                           

                          <tr>
                            <th scope="col">Title</th>
                            <td>{{ Str::limit($post->title, 15, '*') }}</td>
                          </tr>

                           <tr>
                            <th scope="col">Description</th>
                           <td>{{  Str::limit($post->description, 15, '*') }}</td>
                           </tr>


                          <tr>
                            <th scope="col">Category</th>
                            <td>{{ $post->category->name }}</td>
                           
 
                          </tr>

                         <tr>
                            <th scope="col">Status</th>
                            <td>{{ $post->status == 1 ? 'Active': 'InActive' }}</td>
                           
                      
                         </tr>
                          
                          
                        </tbody>
                        
                      </table>
                      {{-- @else()
                        <h3 class="text-center text-danger">No post found</h3>
                        @endif --}}
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection