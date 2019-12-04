<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Library</title>
    <link rel="icon" href="{{asset('home/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('home/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('home/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('home/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/all.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{URL::to('/')}}" style="font-size: 50px; font-family: monospace;"> &#9827; Library &#9827; </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{URL::to('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('admin/alog')}}">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('user/ulog')}}">User</a>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/books')}}">Books</a>
                                </li>
                                
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

     
<div style="text-align: center;">  
                   @foreach($libraries as $l)
     
        <span><img src="{{asset($l->name)}}"  width="400" height="400"></span>
    <fieldset style="position: inline-block;text-align: center; border: 5px;box-sizing: 5px;">
    <div style="background-color: lightgrey; color: white; width: 1350px;text-align: center;">
        <p style=" font-size: 30px;"><h1>Product ID: {{ $l->id }}</h1></p>
        <p style=" font-size: 30px;"> <h2>Title:  {{ $l->ttl }}</h2></p><br>
        <p style=" font-size: 30px;"><h3>Author:  {{ $l->author }}</h3></p><br>
        <p style=" font-size: 30px;"><h4>Category:  {{ $l->category }}</h4></p><br>
        <p style=" font-size: 30px;"><h5>Edition:  {{ $l->edition }}</h5></p><br>
        <p style=" font-size: 30px;"><h6>Price:  {{ $l->price }}</h6></p><br>
        <p style=" font-size: 30px;">{{ $l->stock }}</p><br>
    </div>
        
    </fieldset> 
      
        
     
      @endforeach
                 
                
             </div>

    
    <!-- banner part start-->

    <!-- cta part start-->
    
    <!-- cta part end-->

    <!-- service_part part start-->
   
    <!-- service_part part end-->

    <!-- about part start-->
    
    <!-- about part start-->

    <!-- service_part start-->
   
    <!-- upcoming_event part start-->

    <!-- happy_client counter start -->
   
    <!-- happy_client counter end -->

    <!--::review_part start::-->
   
    <!--::blog_part end::-->

    <!-- portfolio_part start-->

    <!-- cta part start-->
    
    <!-- cta part end-->
    <!-- team_member part start-->
   
    <!-- team_member part end-->

    <!--::blog_part start::-->
    
    <!--::blog_part end::-->

    <!-- footer part start-->
   
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('home/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('home/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('home/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('home/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('home/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('home/js/waypoints.min.js')}}"></script>
    <script src="{{asset('home/js/owl.carousel2.thumbs.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('home/js/slick.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('home/js/custom.js')}}"></script>
</body>

</html>