<div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
    <nav class="mobile-menu" id="mobile-menu">
        <div class="sidebar-nav">
            <ul class="nav side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <button class="btn mobile-menu-btn" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">International</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Food</a></li>
                <!-- social icon -->
                <li>
                    <div class="social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                            <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                            <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="top_header_icon">
                    <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </span>
            <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </span>
            <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>
                        </span>
            <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                        </span>
            <span class="top_header_icon_wrap">
                            <a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>
                        </span>
        </div>
        <div id="showLeft" class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->
<!-- top header -->
<div class="top_header hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <div class="top_header_menu_wrap">
                    <ul class="top-header-menu">
                        <li><a href="{{ route('register') }}">REGISTER</a></li>
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                    </ul>
                </div>
            </div>
            <!--breaking news-->
            <div class="col-sm-8 col-md-7">
                <div class="newsticker-inner">
                    <ul class="newsticker">
                        @foreach($categories as $category)
                            <li style="font-size: 13px; line-height: 1.7; margin: 3px"><span class="color-3">{{ $category->category_name }}</span><a href="#">{{ $category->category_title }}</a></li>
                        @endforeach
                    </ul>
                    <div class="next-prev-inner">
                        <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                        <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-2">
                <div class="top_header_icon">
                            <span class="top_header_icon_wrap">
                                    <a target="_blank" href="https://www.linkedin.com" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                </span>
                    <span class="top_header_icon_wrap">
                                    <a target="_blank" href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>
                                </span>
                    <span class="top_header_icon_wrap">
                                    <a target="_blank" href="https://www.google.com" title="Google"><i class="fa fa-google-plus"></i></a>
                                </span>
                    <span class="top_header_icon_wrap">
                                    <a target="_blank" href="https://www.Vimeo.com" title="Vimeo"><i class="fa fa-vimeo"></i></a>
                                </span>
                </div>
            </div>
        </div>
    </div>
</div>
