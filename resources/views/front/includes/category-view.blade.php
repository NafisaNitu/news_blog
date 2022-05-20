<div id="content-slide-5" class="owl-carousel">
    <!-- item-1 -->
    <div class="item">
        <div class="row rn_block">
            @foreach($cat as $category)
                <div class="col-md-6 col-sm-6 padd">
                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                    <!-- image -->
                    <div class="post-thumb">
                        <a href="{{ route('cat-details', ['id' =>$category->id]) }}">
                            <img class="img-responsive" src="{{ asset($category->image) }}" style="height: 140px; width: 100%" alt="">
                        </a>
                    </div>
                    <div class="post-info meta-info-rn">
                        <div class="slide">
                            <a href="{{ route('cat-details', ['id' =>$category->id]) }}" style="color: white; font-size: 12px" class="">{{ $category->category_name }}</a>
                        </div>
                    </div>
                </div>

                <div class="post-title-author-details">
                    <h4 style="font-size: 13px; line-height: 1.7"><a href="{{ route('cat-details', ['id' =>$category->id]) }}">{{ $category->category_title }}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
