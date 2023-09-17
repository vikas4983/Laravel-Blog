<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>

    <!-- ** Basic Page Needs ** -->
    <meta charset="utf-8">
    <title>Megakit | HTML5 Agency Template</title>

    <!-- ** Mobile Specific Metas ** -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Agency HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Html5 Agency Template v1.0">

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets/site/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('assets/site/plugins/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/plugins/magnific-popup/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/plugins/slick/slick-theme.cs') }}s">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/style.css') }}">

    <!--Favicon-->
    <link rel="icon" href="{{ asset('assets/site/images/favicon.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/site/css/styles.css') }}">
    
</head>

<body>

    <!-- Header Start -->
    <header class="navigation">
        <div class="header-top ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-md-4">
                        <div class="header-top-socials text-center text-lg-left text-md-left">
                            <a href="https://www.facebook.com/themefisher" aria-label="facebook"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/themefisher" aria-label="twitter"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://github.com/themefisher/" aria-label="github"><i
                                    class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                        <div class="header-top-info mb-2 mb-md-0">
                            <a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
                            <a href="mailto:support@gmail.com"><i
                                    class="fas fa-envelope mr-2"></i><span>support@gmail.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg px-0 py-4">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                Mega<span>kit.</span>
                            </a>

                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                                data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="fa fa-bars"></span>
                            </button>

                            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item @@home">
                                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item @@home">
                                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                                    </li>
                                    <li class="nav-item @@home">
                                        <a class="nav-link" href="{{ url('register') }}">Register</a>
                                    </li>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Close -->

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">News details</span>
                        <h1 class="text-capitalize mb-4 text-lg">Blog Single</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item text-white-50">News details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                <img loading="lazy" src="{{ asset('storage/auth/posts/' . $blog->image->image) }}"
                                    alt="blog" class="img-fluid rounded">

                                <div class="blog-item-content bg-white p-5">
                                    <div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
                                        <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>
                                            {{ date('d-M-yy', strtotime($blog->created_at)) }}</span>
                                        <span class="text-black text-capitalize mr-3"><i class="ti-comment mr-1"></i>
                                            {{ count($comments) }} Comments</span>
                                    </div>

                                    <h2 class="mt-3 mb-4">{{ $blog->title }}</h2>
                                    <p class="lead mb-4">{{ $blog->description }}!</p>

                                    <div
                                        class="tag-option mt-5 d-block d-md-flex justify-content-between align-items-center">
                                        <ul class="list-inline">
                                            <li>Tags:</li>
                                            @foreach ($blog->tags as $tag)
                                                <li class="list-inline-item"><a href="#"
                                                        rel="tag">{{ $tag->name }}</a></li>
                                            @endforeach
                                        </ul>

                                        <ul class="list-inline">
                                            <li class="list-inline-item"> Share: </li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        
                        <div class="col-lg-12 mb-5">
                            <form action="{{ url('postcomment', $blog->id) }}"
                                class="contact-form bg-white rounded p-5" method="post" id="comment-form">
                                @csrf
                                <h4 class="mb-4">Write a comment</h4>
                                <textarea class="form-control mb-3" class="fixed" style="resize: none" name="comment" id="comment"
                                    cols="20" rows="3" placeholder="Comment"></textarea>
                                <button class="btn btn-main  " style="float:right" type="submit">Comment</button>
                            </form>
                        </div>
                        <div>
                            
                            @if (session('success'))
                                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <strong>{{ $blog->user->name }}</strong> &nbsp {{ session('success') }}
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                @endif
                        </div>
                        @if (count($comments) > 0)
                            <div class="col-lg-12 mb-5">
                                <div class="comment-area card border-0 p-5">
                                    <h4 class="mb-4">{{ count($comments) }} Comments</h4>
                                    <ul class="comment-tree list-unstyled">
                                        @foreach ($comments as $comment)
                                            <li class="mb-5">
                                                <div class="comment-area-box">
                                                    <img loading="lazy" alt="comment-author"
                                                        src="images/blog/test1.jpg"
                                                        class="img-fluid float-left mr-3 mt-2">

                                                    <h5 class="mb-1">{{ $comment->user->name }}</h5>
                                                    <span>{{ $comment->user->email }}</span>


                                                    <div
                                                        class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">

                                                        <span class="date-comm">Posted
                                                            {{ $blog->created_at->format('d-M-yy') }} </span>

                                                    </div>

                                                    <div>


                                                    </div>
                                                    
                                                    <div class="comment-content mt-3">
                                                        <p>{{ $comment->comment }}. </p>
                                                       
                                                        @foreach($comment->replies as $reply)
                                                       <span style="float: right"><strong>{{ $comment->user->name }}</strong>: {{ $reply->reply }}<a title="Delete Reply" href="{{ url('deletecommentreply', $reply->id) }}"><i class="fa fa-trash text-danger" style="float: right" aria-hidden="true"></i></a></span>
                                                       
                                                       
                                                       <br>
                                                       @endforeach
                                                    </div>
                                                </div>

                                                <span class="show-reply-box mt-3"  style="float:right; cursor:pointer; ">Reply</span>

                                                <div class="comment-reply-div">
                                                    <form action="{{ url('commentreply', $comment->id) }}"
                                                        method="post" id="comment-form">
                                                        @csrf
                                                        <textarea class="form-control mb-3" class="fixed" style="resize: none" name="reply" id="reply"
                                                            cols="20" rows="3" placeholder="Comment"></textarea>
                                                        <button class="btn  btn-main  " style="float:right"
                                                            type="submit">Reply</button>
                                                    </form>
                                                </div>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md 12 mt-3">
                                <span>{{ $comments->links() }}</span>

                            </div>
                        @endif





                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar-wrap">
                        <div class="sidebar-widget search card p-4 mb-3 border-0">
                            <input type="text" class="form-control" placeholder="search">
                            <a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
                        </div>

                        <div class="sidebar-widget card border-0 mb-3">
                            <img loading="lazy" src="images/blog/blog-author.jpg" alt="blog-author"
                                class="img-fluid">
                            <div class="card-body p-4 text-center">
                                <h5 class="mb-0 mt-4">Arther Conal</h5>
                                <p>Digital Marketer</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

                                <ul class="list-inline author-socials">
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-twitter text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-pinterest text-muted"></i></a>
                                    </li>
                                    <li class="list-inline-item mr-3">
                                        <a href="#"><i class="fab fa-behance text-muted"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        @if(count($latestpost)>0)
                        <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                            <h5>Latest Posts</h5>

                            @foreach($latestpost as $post)
                           
                            <div class="media border-bottom py-3">
                                <a href="{{ url('singleblog', $post->id) }}"><img loading="lazy" class="mr-4" src="{{ asset('storage/auth/posts/'.$blog->image->image) }}" width="90px"    
                                        alt="blog" ></a>
                                <div class="media-body">
                                    <h6 class="my-2"><a href="{{ url('singleblog', $post->id) }}">{{ $post->title }}</h6></a>
                                    <span class="text-sm text-muted">{{ $post->created_at }}</span>
                                </div>
                            </div>
                            @endforeach
  
                        </div>
                        @endif
                        @if(count($tags)>0)

                        
                        <div class="sidebar-widget bg-white rounded tags p-4 mb-3">
                            <h5 class="mb-4">Tags</h5>
                            @foreach($tags as $tag)
                            <a href="{{ url('singleblog', $tag->post->first()) }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget">
                        <h4 class="text-capitalize mb-4">Company</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="about.html">Terms & Conditions</a></li>
                            <li><a href="about.html">Privacy Policy</a></li>
                            <li><a href="cobtact.html">Support</a></li>
                            <li><a href="cobtact.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget">
                        <h4 class="text-capitalize mb-4">Quick Links</h4>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="blog-grid.html">Blogs</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
                    <div class="widget">
                        <h4 class="text-capitalize mb-4">Subscribe Us</h4>
                        <p>Subscribe to get latest news article and resources </p>

                        <form action="#" class="sub-form">
                            <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
                            <a href="#" class="btn btn-main btn-small">subscribe</a>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <div class="logo mb-4">
                            <h3>Mega<span>kit.</span></h3>
                        </div>
                        <h6><a href="mailto:support@gmail.com">Support@megakit.com</a></h6>
                        <a href="tel:+23-345-67890"><span class="text-color h4">+23-456-6588</span></a>
                    </div>
                </div>
            </div>

            <div class="footer-btm pt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            Copyright &copy; 2020, Designed &amp; Developed by <a
                                href="https://themefisher.com/">Themefisher</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-left text-lg-right">
                        <ul class="list-inline footer-socials">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                        class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                        class="fab fa-twitter mr-2"></i>Twitter</a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Scroll to top-->
    <div id="scroll-to-top" class="scroll-to-top">
        <span class="icon fa fa-angle-up"></span>
    </div>
    <script>
        $('.comment-reply-div').hide();
        $(document).ready(function() {
            $('.show-reply-box').click(function() {
                $(this).siblings('.comment-reply-div').toggle('swing');
                // $(this).siblings('.comment-reply-div').toggle('swing');
            });


        });
    </script>

    <!--
Essential Scripts
=====================================-->
    <!-- Main jQuery -->
    <script src="{{ asset('assets/site/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('assets/site/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!--  Magnific Popup-->
    <script src="{{ asset('assets/site/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/site/plugins/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/site/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/site/plugins/counterup/jquery.counterup.min.js') }}"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="{{ asset('assets/site/plugins/google-map/map.js') }}" defer></script>

    <script src="{{ asset('assets/site/js/script.js') }}"></script>

</body>

</html>
