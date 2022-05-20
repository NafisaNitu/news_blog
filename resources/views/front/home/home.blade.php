@extends('front.master')

@section('title')
    Prothom Alo
@endsection

@section('body')

    <section class="news-feed paddb">
        <div class="container">
            <div class="row row-margin">
                <div class="col-xs-12 col-md-6 col-sm-6 col-padding">

                    @include('front.includes.slider')

                </div>
                <!-- right side post -->
                <div class="hidden-xs col-md-6 col-sm-6 col-padding-1">
                    <section class="articale-inner">
                        <div class="row">

                            @include('front.includes.category-view')

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding ">RECENT NEWS</h3>
                    <div class="headding-border"></div>

                    @include('front.includes.recent')

                </section>
                <!-- Politics Area
                    ============================================ -->
                <section class="politics_wrapper">
                    <h3 class="category-headding ">SPORTS</h3>
{{--                    POLITICS--}}
                    <div class="headding-border"></div>
                    <div class="row">

                        @include('front.includes.politics')

                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.Politics -->
            </div>
            <!-- /.left content inner -->
            <div class="col-md-4 col-sm-4 left-padding">
                <!-- right content wrapper -->
{{--                <div class="input-group search-area">--}}
{{--                    <!-- search area -->--}}
{{--                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">--}}
{{--                    <div class="input-group-btn">--}}
{{--                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- /.search area -->
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="{{ asset('/') }}front-assets/images/12.gif" class="img-responsive center-block" alt=""></a>
                </div>


            @include('front.includes.popular')


            <!-- / tab -->
            </div>
            <!-- side content end -->
        </div>
        <!-- row end -->
    </div>


    <section class="all-category-inner">
        <div class="container">
            @include('front.includes.category-2')
        </div>
    </section>
    <!-- article section Area
        ============================================ -->
    <div class="lat_arti_cont_wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="category-headding ">Latest News</h3>
                            <div class="headding-border"></div>
                        </div>
                    </div>
                    <!-- post-2 -->
                    <div class="row">

                        @include('front.includes.latest')

                    </div>
                </div>
                <!-- /.article -->
            </div>
        </div>
    </div>
    <!-- pagination
        ============================================ -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div style="border: none" class="pagination">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
