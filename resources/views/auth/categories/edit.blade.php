@extends('layouts.auth')
@section('title', 'Edit Category | Admin')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Categories Create</h2>
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

                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="name" class="form-control" name="name" value="{{ $category->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Category Name</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection