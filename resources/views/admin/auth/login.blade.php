 <!DOCTYPE html>
    <html lang="en">

 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('/') }}front-assets/images/fev-icon.png" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login Page</title>
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('/') }}front-assets/css/bootstrap.min.css">
        <!-- Scrollbar css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-assets/css/jquery.mCustomScrollbar.css" />
        <!-- Owl Carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-assets/owl-carousel/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-assets/owl-carousel/owl.theme.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-assets/owl-carousel/owl.transitions.css" />
        <!-- youtube css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-assets/css/RYPP.css" />
        <!-- jquery-ui css -->
        <link rel="stylesheet" href="{{ asset('/') }}front-assets/css/jquery-ui.css">
        <!-- animate -->
        <link rel="stylesheet" href="{{ asset('/') }}front-assets/{{ asset('/') }}front-assets/css/animate.min.css">
        <!-- fonts css -->
        <link rel="stylesheet" href="{{ asset('/') }}front-assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-assets/css/Pe-icon-7-stroke.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front-assets/css/flaticon.css" />
        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('/') }}front-assets/css/style.css">
    </head>

    <body>
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Login Page</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{ route('home') }}" title="">Home</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="login-reg-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="login-form-inner">
                        <h3 class="category-headding text-center">LOGIN TO YOUR ACCOUNT</h3>
                        <div class="headding-border bg-color-1"></div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <label>Email <sup>*</sup></label>
                            <input type="email" class="form-control" name="email" placeholder="Write Your Email">
                            <label>Password <sup>*</sup></label>
                            <input type="password" class="form-control" name="password" placeholder="Write Your Password Here ...">
                            <button style="margin-top: 20px;" type="submit" class="btn btn-style">Login</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- footer Area
        ============================================ -->

    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/metisMenu.min.js"></script>
    <!-- Scrollbar js -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- animate js -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/wow.min.js"></script>
    <!-- Newstricker js -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/jquery.newsTicker.js"></script>
    <!--  classify JavaScript -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/classie.js"></script>
    <!-- owl carousel js -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/owl-carousel/owl.carousel.js"></script>
    <!-- youtube js -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/RYPP.js"></script>
    <!-- jquery ui js -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/jquery-ui.js"></script>
    <!-- form -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/form-classie.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('/') }}front-assets/js/custom.js"></script>
    </body>

    </html>


