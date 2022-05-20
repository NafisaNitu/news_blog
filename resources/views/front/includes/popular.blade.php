<div class="tab-inner">
    <ul class="tabs">
        <li><a href="#">POPULAR</a></li>
        <li><a href="#">MOST VIEWED</a></li>
    </ul>
    <hr>
    <!-- tabs -->
    <div class="tab_content">
        <div class="tab-item-inner">
            @foreach($cat as $category)
                 <div class="box-item wow fadeIn" data-wow-duration="1s">
                <div class="img-thumb">
                    <a href="{{ route('cat-details', ['id' =>$category->id]) }}" rel="bookmark"><img class="entry-thumb" src="{{ asset($category->image) }}" alt="" height="80" width="90"></a>
                </div>
                <div class="item-details">
                    <h6 class="sub-category-title bg-color-1">
                        <a href="{{ route('cat-details', ['id' =>$category->id]) }}">{{ $category->category_name }}</a>
                    </h6>
                    <h3 style="font-size: 11px; line-height: 1.7" class="td-module-title"><a href="{{ route('cat-details', ['id' =>$category->id]) }}">{{ $category->category_title }}</a></h3>
                </div>
            </div>
            @endforeach
        </div>
        <!-- / tab item -->

        <!-- / tab item -->
    </div>
    <!-- / tab_content -->
</div>
