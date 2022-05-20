@extends('front.master')

@section('title')
    {{ $category->category_name }}
@endsection

@section('body')

    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
{{--                    <h1>fashion</h1>--}}
                    <h1>{{ $category->category_name }}</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a href="{{ route('home') }}" title="">Home</a></li>
                            <li><a href="" title="">{{ $category->category_name }}</a></li>
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
                    <div style="width: 65%;" class="post-style2-detail">
                        <h3 style="font-size: 16px; line-height: 1.7"><a href="" title="">{{ $new->title }}</a></h3>
                        <p>{!!  substr_replace($new->content,'....',150) !!}</p>
                        <a href="{{ route('details', ['id' => $new->id]) }}" type="button" class="btn btn-style">Reade more</a>
                    </div>
                </div>

                <!--Post list-->
                @endforeach
            </div>

        </div>
        <!-- pagination -->

    </div>

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



