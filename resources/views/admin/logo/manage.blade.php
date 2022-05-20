@extends('admin.master')

@section('title')
    manage logo
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Manage Logo</h1>
                        </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach($logos as $logo)
                                    <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $logo->title }}</td>
                                        <td>
                                            <img src="{{ asset($logo->image) }}" style="height: 100px; width: 100px;" alt="">
                                        </td>
                                        <td>{{ $logo->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('change-status-logo', ['id' => $logo->id]) }}" class="btn btn-{{ $logo->status == 1 ? 'info' : 'warning' }} btn-sm">status</a>
                                            <a href="{{ route('edit-logo', ['id' => $logo->id]) }}" class="btn btn-secondary btn-sm">edit</a>
                                            <a href="{{ route('delete-logo', ['id' => $logo->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger btn-sm">del</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection





