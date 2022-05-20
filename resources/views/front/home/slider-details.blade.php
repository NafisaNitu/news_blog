@extends('front.master')

@section('title')
    Details Slider
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="video-container">
                        <img src="{{ asset($slider->image) }}" style="height: 400px; width: 100%" alt="">
                    </div>
                    <div class="paragraph-padding">
                        <!-- /.social icon -->
                        <h1>{{ $slider->category->category_name }}</h1>

                        <p>{{ $slider->title }}</p>

                    </div>
                    <!-- tags -->
                    <div class="tags">
                        <ul>
                            @foreach($categories as $category)
                                <li> <a href="{{ route('cat-details', ['id' =>$category->id]) }}">{{ $category->category_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Related news area
                        ============================================ -->
                    <div class="related-news-inner">
                        <h3 class="category-headding ">RELATED NEWS</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide-5" class="owl-carousel">
                                <!-- item-1 -->
                                <div class="item">
                                    <div class="row rn_block">
                                        @foreach($cats as $cat)
                                            <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="{{ route('cat-details', ['id' =>$cat->id]) }}">
                                                            <img class="img-responsive" src="{{ asset($cat->image) }}" style="height: 140px; width: 100%" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-info meta-info-rn">
                                                        <div class="slide">
                                                            <a href="{{ route('cat-details', ['id' =>$cat->id]) }}" style="color: white; font-size: 12px" class="">{{ $cat->category_name }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4><a href="{{ route('cat-details', ['id' =>$cat->id]) }}">{{ $cat->category_title }} ...</a></h4>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>

@endsection




