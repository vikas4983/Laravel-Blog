@extends('layouts.auth')
@section('title', 'Posts')
@section('styles')
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    <script src="http://datatables.net/release-datatables/media/js/jquery.js"></script>
    <script src="http://datatables.net/release-datatables/media/js/jquery.dataTables.js"></script>
    <script src="http://datatables.net/release-datatables/extensions/Scroller/js/dataTables.scroller.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/auth/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />
        <link  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Posts</h2>
                </div>

            </div>
            <div class="card card-default">
                <div class="card-header">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (session('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('danger') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    <br>
                    @if (count($posts) > 0)
                        <table class="table" id="posts" class="display nowrap" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td> <img src="{{ asset('/storage/auth/posts/' . ($post->image->image ?? 'default.jpg')) }}" alt="post image" width="80px" height="100px" ></td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>{{ Str::limit($post->title, 15, '*') }}</td>
                                        <td>{{ Str::limit($post->description, 15, '*') }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>{{ $post->status == 1 ? 'Active' : 'InActive' }}</td>
                                        <td>
                                            <a href="{{ route('posts.show', $post->id) }}"
                                                class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-info"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>

                                            </form>
                                        </td>



                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    
                    @else
                        <div class="cantainer">
                            <h3 class="text-center text-danger">No post found</h3>
                        </div>
                    @endif
                </div>
                


            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/auth/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#posts').DataTable();
            $(".dataTables_wrapper").css("width", "100%");
        });
    </script>
    <script>
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin = "anonymous" >
    </script>
    </script>

@endsection
