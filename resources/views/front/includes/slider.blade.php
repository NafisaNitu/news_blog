<div id="news-feed-carousel" class="owl-carousel owl-theme">
    @foreach($sliders as $slider)
    <div class="item">
        <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
            <div class="post-thumb img-zoom-in">
                <a href="{{ route('slider-details', ['id' => $slider->id]) }}">
                    <img class="entry-thumb-4" src="{{ asset($slider->image) }}" style="height:415px" alt="">
                </a>
            </div>
            <div class="post-info">
                <span class="color-4">{{ $slider->category->category_name }}</span>
                <h3 style="line-height: 1.7; font-size: 20px;" class="post-title"><a href="" rel="bookmark">{{ $slider->title }}</a></h3>
            </div>
        </div>
    </div>
    @endforeach
</div>
