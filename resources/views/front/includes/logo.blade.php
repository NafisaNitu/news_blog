<div class="top_banner_wrap">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-4 col-sm-4">
                <div class="header-logo">
                    <!-- logo -->
                    <a href="{{ route('home') }}">
                        <img class="td-retina-data img-responsive" src="{{ asset($logo->image) }}" style="margin-left: 350px; padding: 0px;" alt="">
                    </a>
                </div>
            </div>

            <!-- Search Section ---->

            <div class="col-md-6 col-sm-4" style="float: right;width: 320px;margin-top: 20px; overflow: hidden">
                <div class="input-group search-area">
                    <form action="{{ url('/search') }}" method="GET">
                        <select name="category" class="form-control" id="" style="float: left; width: 47%; position: absolute; left: -5%; top: 0%">
                            <option value="ALL" {{ request('category') == "ALL" ? 'selected' : '' }}>All Categories</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                @endforeach
                        </select>
                    <!-- search area -->
                    <input type="text" name="news" class="form-control" style="width: 52%; margin-left: 118px;" placeholder="Search here ..." value="{{ request('news') }}">
                    <div class="input-group-btn" style="float: right; position: absolute; top: 0%; left: 92%;">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden=""></i></button>
                    </div>
                    </form>
                </div>
         </div>
    </div>
</div>
