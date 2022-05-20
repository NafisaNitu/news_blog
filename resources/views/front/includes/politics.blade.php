<div id="content-slide-2" class="owl-carousel">
    <!-- item-1 -->
    <div class="item">
        <div class="row">
            <!-- main post -->
            @foreach($new as $news)
                 <div class="col-sm-6 col-md-6">
                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                    <!-- post title -->
                    <h3 style="font-size: 16px; line-height: 1.7"><a href="{{ route('cat-details', ['id' => $news->id]) }}">{{ $news->title }}</a></h3>
                    <!-- post image -->
                    <div class="post-thumb">
                        <a href="{{ route('details', ['id' => $news->id]) }}">
                            <img src="{{ asset($news->image) }}" style="height: 200px; width: 100%" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <div class="post-title-author-details">
                    <p style="font-size: 12px; line-height: 1.7">{!! substr_replace($news->content,' ', 150) !!}<a href="{{ route('details', ['id' => $news->id]) }}">Read more...</a></p>
                </div>
            </div>
            @endforeach

            <!-- right side post -->
            <div class="col-sm-6 col-md-6">
                <div class="row rn_block">
                    @foreach($newpoli as $newspoli)
                    <div class="col-xs-6 col-md-6 col-sm-6 post-padding">
                        <!-- post image -->
                        <div class="post-thumb wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a href="{{ route('details', ['id' => $newspoli->id]) }}">
                                <img src="{{ asset($newspoli->image) }}" class="img-responsive" style="height: 100px; width: 100%" alt="">
                            </a>
                        </div>
                        <div class="post-title-author-details">
                            <!-- post image -->
                            <h5 style="font-size: 13px; line-height: 1.7"><a href="{{ route('details', ['id' => $newspoli->id]) }}">{{ $newspoli->title }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- item-2 -->

</div>
