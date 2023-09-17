@extends('layouts.site')
@section('title', 'Blog | Home')
@section('content')
 <section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Our blog</span>
                    <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                        <li class="list-inline-item"><span class="text-white">/</span></li>
                        <li class="list-inline-item text-white-50">Our blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                  
                        <div class="col-lg-6 col-md-6 mb-5">
                            <div class="blog-item">

                                <img loading="lazy" src="{{ asset('storage/auth/posts/'.$blog->image->image) }}" alt="blog"
                                  class="img-fluid rounded">
                                <div class="blog-item-content bg-white p-5">
                                    <div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
                                        
                                        <span class="text-muted text-capitalize mr-3"><i class="ti-time mr-1"></i>{{  $blog->created_at->format('d-M-yy') }}</span>
                                       <a href="{{ url('singleblog', $blog->id) }}"><span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>{{ $blog->comments ? count($blog->comments): 0 }}</span></a> 
                                        
                                    </div>
                                    
                                    <h3 class="mt-3 mb-3"><a href="#">{{ $blog->title }}</a>
                                    </h3>
                                    <p class="mb-4">{{$blog->description}}</p>

                                    <a href="{{ url('singleblog', $blog->id) }}" class="btn btn-small btn-main btn-round-full">Learn More</a>
                                    
                                </div>

                                
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="container">
                        <h2 class="text-center text-danger">No Blog Found</h2>
                    </div>
                @endif
            </div>
            {{-- <div class="col-md 12 mt-3">
                <span>{{ $blogs->links() }}</span>

            </div> --}}
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 text-center">
                    <nav class="navigation pagination d-inline-block">
                        <div class="nav-links">
                           <span>{{ $blogs->links() }}</span>
                        </div>
                    </nav>
                </div>
            </div>
            
        </div>
    </section>
@endsection
