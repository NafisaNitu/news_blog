<div class="row">
    <div id="content-slide" class="owl-carousel">
        @foreach($newses as $news)
             <div class="item">
            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                <!-- image -->
                <h3 style="font-size: 16px; line-height: 1.7"><a href="{{ route('details', ['id' => $news->id]) }}">{{ $news->title }}</a></h3>
                <div class="post-thumb">
                    <a href="{{ route('details', ['id' => $news->id]) }}">
                        <img class="img-responsive" src="{{ asset($news->image) }}" style="height:200px; width: 100% " alt="">
                    </a>
                </div>
                <div class="post-info meta-info-rn">
                    <div class="slide">
                        <a href="{{ route('details', ['id' => $news->id]) }}" style="color: white; font-size: 12px" class="">{{ $news->category->category_name }}</a>
                    </div>
                </div>
            </div>
            <div class="post-title-author-details">
                <p style="font-size: 12px; line-height: 1.7">{!! substr_replace($news->content,' ', 160) !!}<a href="{{ route('details', ['id' => $news->id]) }}"> Read more...</a></p>
            </div>
        </div>

        @endforeach
    </div>
</div>
<div class="row rn_block">
    @foreach($category as $cat)
        <div class="col-md-4 col-sm-6 padd">
        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
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
            <h4 style="font-size: 13px; line-height: 1.7"><a href="{{ route('cat-details', ['id' =>$cat->id]) }}">{{ $cat->category_title }}</a></h4>
        </div>
    </div>
    @endforeach
</div>
