
@extends('front.master')

@section('title')
    search
@endsection

@section('body')

    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
{{--                    <h1>{{ $category->category_name }}</h1>--}}
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{ route('home') }}" title="">Home</a></li>
                            <li><a href="" title=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">

            <div class="col-sm-10">
                <!--Post list-->
                @foreach($news as $new)
                    <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                        <a href="{{ route('details', ['id' => $new->id]) }}"><img src="{{ asset($new->image) }}" style="height: 200px; width: 250px;" alt=""></a>
                        <div class="post-style2-detail">
                            <h3><a href="" title="">{{ $new->title }}</a></h3>
                            <p>{{ substr_replace($new->content,'.',130) }}</p>
                            <a href="{{ route('details', ['id' => $new->id]) }}" type="button" class="btn btn-style">Reade more</a>
                        </div>
                    </div>

                    <!--Post list-->
                @endforeach
            </div>

        </div>
        <!-- pagination -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="pagination">
                        <li>
                            <a href="#" class="prev">
                                <i class="pe-7s-angle-left"></i>
                            </a>
                        </li>
                        <li> <a href="#">1</a></li>
                        <li> <a href="#" class="active">2</a></li>
                        <li> <a href="#">3</a></li>
                        <li> <a href="#">4</a></li>
                        <li> ... </li>
                        <li> <a href="#">15</a></li>
                        <li>
                            <a href="#" class="next"> <i class="pe-7s-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection



