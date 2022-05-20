<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.includes/assets.css')
</head>

<body>
<div class="se-pre-con"></div>
<header>
    <!-- Mobile Menu Start -->
    @include('front.includes.header-top')
    @include('front.includes.logo')

    <!-- navber -->
    <div class="container hidden-xs">

        <nav class="navbar">

        @include('front.includes.menu')
            <!-- navbar-collapse -->
        </nav>
    </div>
</header>
<!-- news feed Area
    ============================================ -->


    @yield('body')

<!-- pagination
        ============================================ -->
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-12">--}}
{{--            <ul class="pagination">--}}
{{--                <li>--}}
{{--                    <a href="#" class="prev">--}}
{{--                        <i class="pe-7s-angle-left"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li> <a href="#">1</a></li>--}}
{{--                <li> <a href="#" class="active">2</a></li>--}}
{{--                <li> <a href="#">3</a></li>--}}
{{--                <li> <a href="#">4</a></li>--}}
{{--                <li> ... </li>--}}
{{--                <li> <a href="#">15</a></li>--}}
{{--                <li>--}}
{{--                    <a href="#" class="next"> <i class="pe-7s-angle-right"></i></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="col-sm-12">--}}
{{--            <div class="banner">--}}
{{--                <img src="images/top-bannner2.jpg" class="img-responsive center-block" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- footer Area
    ============================================ -->
@include('front.includes.footer')
<!-- /.sub footer -->
@include('front.includes.assets.script')
</body>


</html>

