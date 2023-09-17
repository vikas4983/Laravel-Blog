@extends('layouts.auth')
@section('title', 'Edit Post | Admin')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/auth/css/multi-dropdown.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Edit Post </h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text"  class="form-control" name="title" value="{{ old('title', $post->title) }}"
                                placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" cols="30" rows="3" style="resize:none"
                                class="form-control" value="{{ old('description',$post->description) }}" placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label>Is Publish</label>
                            <select name="status" class="form-control">
                                <option value="" disabled selected>Choose One</option>
                                <option @selected(old('status', $post->status)==1) value="1">Publish</option>
                                <option @selected(old('status', $post->status)==0) value="0">Draft</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                           
                            <select name="category" class="form-control">
                                <option value="" disabled selected>Select category</option>
                                {{-- It wil firstly check category if category is null then it will provide no error  --}}
                                @if (count($categories) > 0)
                                    @foreach ($categories as $category)
                                   
                                    <option 
                                   
                                     @selected(old('category', $post->category_id)== $category->id) value="{{ $category->id }}">
                                        {{ $category->name }}</option>
                                    @endforeach
                                @else
                                    <option value="">No Category</option>
                                @endif



                                {{-- 1 @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach --}}

                                {{-- 2 If category have not then hide category --}}
                                {{-- @php($category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endphp --}}




                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tag</label>
                            @php 
                            $existingPostTags = [];
                            foreach ($post->tags->all() as $key => $value) {
                                $existingPostTags[$key] = $value->id;
                            }
                            @endphp

                            <select name="tags[]" class="form-control selectpicker" multiple data-live-search="true">
                                <option  value="" disabled selected>Select Tags</option>
                                @if (count($tags))
                                    @foreach ($tags as $tag)
                                        <option 
                                        {{-- {{ in_array($tag->id, old('tags', $existingPostTags))?"selected":"" }} --}}
                                        @selected(in_array($tag->id, old('tags', $existingPostTags))) 
                                        
                                        value="{{ $tag->id }}">{{ $tag->name }}
                                    
                                    </option>
                                    @endforeach
                                @endif

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="file" value="{{ old('file') }}"
                               >
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="file1" value="{{ old('file1') }}"
                               >
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/auth/js/multi-dropdown.js') }}"></script>
@endsection
