<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('recent-news') }}" class="category01">সর্বশেষ</a></li>
        <li><a href="{{ route('special-news') }}" class="category04">বিশেষ সংবাদ</a></li>

        @foreach($categories as $category)
             <li><a href="{{ route('category', ['id' => $category->id]) }}" class="category05">{{ $category->category_name }}</a></li>
        @endforeach

{{--            <li><a href="{{ route('category') }}" class="category05">রাজনীতি</a></li>--}}
{{--        <li><a href="{{ route('category') }}" class="category06">বাংলাদেশ</a></li>--}}
{{--        <li><a href="{{ route('category') }}" class="category07">বিশ্ব</a></li>--}}
{{--        <li><a href="{{ route('category') }}" class="category08">বাণিজ্য</a></li>--}}
{{--        <li><a href="{{ route('category') }}" class="category08">খেলা</a></li>--}}

        {{--        <li>--}}
{{--            --}}
{{--        </li>--}}
    </ul>
</div>

