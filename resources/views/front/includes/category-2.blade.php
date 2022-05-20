<div class="row">
    @foreach($cats as $cat)
    <div class="col-md-4 col-sm-4">
        <!-- sports -->
        <div class="sports-inner">
            <h3 class="category-headding ">{{ $cat->category_name }}</h3>
            <div class="headding-border bg-color-1"></div>
            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                <!-- post title -->
                <h3 style="font-size: 16px; line-height: 1.7"><a href="{{ route('cat-details', ['id' =>$cat->id]) }}">{{ $cat->category_title }}</a></h3>
                <!-- post image -->
                <div class="post-thumb">
                    <a href="{{ route('cat-details', ['id' =>$cat->id]) }}">
                        <img src="{{ asset($cat->image) }}" style="height: 200px; width: 100%" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
            <div class="post-title-author-details">
                <p style="font-size: 13px; line-height: 1.7">{!! substr_replace($cat->description,'...', 150) !!} <a href="{{ route('cat-details', ['id' =>$cat->id]) }}"></a></p>
            </div>
        </div>
    </div>
    @endforeach
</div>
