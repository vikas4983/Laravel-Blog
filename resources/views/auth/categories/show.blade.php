@extends('layouts.auth')
@section('title', 'Show Category | Admin')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Show Category</h2>
                    <br>
                   
                        <table class="table" id="posts" class="display nowrap" width="100%">
                            <tbody>
                                <tr>
                                    <th scope="col">#</th>
                                    <td>{{ $category->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Category</th>
                                    <td>{{ $category->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    
                </div>

            </div>
        </div>
    </div>
@endsection
