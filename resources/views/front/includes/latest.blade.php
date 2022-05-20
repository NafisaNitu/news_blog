<div class="col-sm-10 mx-auto">

    @foreach($news as $new)
        <div class="post-style2 wow fadeIn" data-wow-duration="1s">
        <a href="{{ route('details', ['id' => $new->id]) }}"><img src="{{ asset($new->image) }}" style="height: 200px; width: 300px" alt=""></a>
        <div style="width: 65%;" class="post-style2-detail">
            <h3 style="font-size: 16px; line-height: 1.7"><a href="{{ route('details', ['id' => $new->id]) }}" title="">{{ $new->title }}</a></h3>
            <p>{!!  substr_replace($new->content,'....',200) !!}</p>
            <a href="{{ route('details', ['id' => $new->id]) }}" type="button" class="btn btn-style">Reade more</a>
        </div>
    </div>
    @endforeach
</div>
