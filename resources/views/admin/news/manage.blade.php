@extends('admin.master')

@section('title')
    manage News
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Manage News</h1>
                        </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="width: 5%">#</th>
                                    <th style="width: 25%">Title</th>
                                    <th style="width: 10%">Category</th>
                                    <th style="width: 15%">Image</th>
                                    <th style="width: 25%">Content</th>
                                    <th style="width: 5%">Status</th>
                                    <th style="width: 15%">Action</th>
                                </tr>
                                </thead>
                                @foreach($newses as $news)
                                    <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $news->title }}</td>
                                        <td>{{ $news->category->category_name }}</td>
                                        <td>
                                            <img src="{{ asset($news->image) }}" style="height: 100px; width: 100px;" alt="">
                                        </td>
                                        <td>{!! substr_replace($news->content, '....', 150) !!}</td>
                                        <td>{{ $news->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('change-status-news', ['id' => $news->id]) }}" class="btn btn-{{ $news->status == 1 ? 'info' : 'warning' }} btn-sm">
                                                <i class="fa-solid fa-arrow-{{ $news->status == 1 ? 'down' : 'up' }}"></i>
                                            </a>
                                            <a href="{{ route('edit-news', ['id' => $news->id]) }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('delete-news', ['id' => $news->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            {{ $newses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



