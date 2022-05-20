@extends('admin.master')

@section('title')
    Edit Slider
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Edit Slider</h1>
                        </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <form action="{{ route('update-slider', ['id' => $slider->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Slider Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value=""><------Select a Category--------></option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $slider->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file">
                                        <img src="{{ asset($slider->image) }}" style="height: 100px; width: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""> <input type="radio" name="status" {{ $slider->status == 1 ? 'checked' : '' }} value="1"> Published</label>
                                        <label for=""> <input type="radio" name="status" {{ $slider->status == 0 ? 'checked' : '' }} value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-success btn-block" value="Update Slider">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



