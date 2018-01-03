<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title> {{ $page->title }} </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/gsdk.css" rel="stylesheet"/>
    <link href="/assets/css/examples.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel|Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body class="about-us">

        @include('front.partials.nav')


<div class="wrapper">
    <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="/uploads/home1.jpg">
        </div>
        <div class="small-info">
            <h1> {{ $page->title }} </h1>
            <h3> {{ $page->id }} </h3>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2 class="section-title">{{ $page->title }}</h2>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        {!! $page->content !!}
                    </p>

                </div>
            </div>
        </div>
    </div><!-- section -->

    <div class="section">
        <div class="container">
            <h2 class="section-title">Our Office</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/thumb.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-8">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/thumb.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-8">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/thumb.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/thumb.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/thumb.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/thumb.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-md-4">
                    <div class="card card-plain">
                        <div class="image">
                            <img src="/assets/img/thumb.jpg" alt="..."/>
                            <div class="filter">
                                <button type="button" class="btn btn-neutral btn-simple">
                                    <i class="fa fa-image"></i> View Image
                                </button>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div>


            </div>
        </div>
    </div> <!-- end section meet our clients -->

    <div class="subscribe-line subscribe-line-default">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <form class="">
                        <div class="form-group">
                            <input type="text" value="" class="form-control" placeholder="Enter your email here...">
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-info btn-fill btn-block">Join our team!</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-black">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="social-area pull-right">
                <a class="btn btn-social btn-facebook btn-simple">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="btn btn-social btn-twitter btn-simple">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-social btn-pinterest btn-simple">
                    <i class="fa fa-pinterest"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love
            </div>
        </div>
    </footer>


</div> <!-- wrapper -->
</body>
<!--  jQuery and Bootstrap core files    -->
<script src="/assets/js/jquery.js" type="text/javascript"></script>
<script src="/assets/js/jquery-ui.custom.min.js" type="text/javascript"></script>
<script src="../bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="/assets/js/gsdk-checkbox.js"></script>
<script src="/assets/js/gsdk-morphing.js"></script>
<script src="/assets/js/gsdk-radio.js"></script>
<script src="/assets/js/gsdk-bootstrapswitch.js"></script>
<script src="/assets/js/bootstrap-select.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script src="/assets/js/chartist.min.js"></script>
<script src="/assets/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--  Get Shit Done Kit PRO Core javascript 	 -->
<script src="/assets/js/get-shit-done.js"></script>


<script type="text/javascript">
    var big_image;
    $().ready(function(){
        responsive = $(window).width();

        $(window).on('scroll', gsdk.checkScrollForTransparentNavbar);

        if (responsive >= 768){
            big_image = $('.parallax-image').find('img');

            $(window).on('scroll',function(){
                parallax();
            });
        }

    });

    var parallax = function() {
        var current_scroll = $(this).scrollTop();

        oVal = ($(window).scrollTop() / 3);
        big_image.css('top',oVal);
    };

</script>
</html>
