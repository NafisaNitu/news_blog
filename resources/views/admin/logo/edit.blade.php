@extends('admin.master')

@section('title')
    Edit logo
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Edit Logo</h1>
                        </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <form action="{{ route('update-logo', ['id' => $logo->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Slider Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{ $logo->title }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file">
                                        <img src="{{ asset($logo->image) }}" style="height: 100px; width: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""> <input type="radio" name="status" {{ $logo->status == 1 ? 'checked' : '' }} value="1"> Published</label>
                                        <label for=""> <input type="radio" name="status" {{ $logo->status == 0 ? 'checked' : '' }} value="0"> Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-success btn-block" value="Update Logo">
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




