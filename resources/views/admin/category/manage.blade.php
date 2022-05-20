@extends('admin.master')

@section('title')
    manage category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Manage Category</h1>
                        </div>
                        <div class="card-body">
                            <h1 class="text-success">{{ Session::get('message') }}</h1>
                            <table class="table" id="dataTable">
                                <thead>
                                   <tr>
                                       <th style="width: 5%">#</th>
                                       <th style="width: 10%">Name</th>
                                       <th style="width: 25%">Title</th>
                                       <th style="width: 15%">Image</th>
                                       <th style="width: 25%">Description</th>
                                       <th style="width: 5%">Status</th>
                                       <th style="width: 15%">Action</th>
                                   </tr>
                                </thead>
                                @foreach($categories as $category)
                                <tbody>
                                   <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       <td>{{ $category->category_name }}</td>
                                       <td>{{ $category->category_title }}</td>
                                       <td>
                                           <img src="{{ asset($category->image) }}" style="height: 100px; width: 100px;" alt="">
                                       </td>
                                       <td>{!! substr_replace($category->description, '....', 150) !!}</td>
                                       <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                       <td>
                                           <a href="{{ route('change-status-category', ['id' => $category->id]) }}" class="btn btn-{{ $category->status == 1 ? 'info' : 'warning' }} btn-sm">
                                               <i class="fa-solid fa-arrow-{{ $category->status == 1 ? 'down' : 'up' }}"></i>
                                           </a>

                                           <a href="{{ route('edit-category', ['id' => $category->id]) }}" class="btn btn-success btn-sm"> <i class="fa-solid fa-pen-to-square"></i></a>
                                           <a href="{{ route('delete-category', ['id' => $category->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                       </td>
                                   </tr>
                                </tbody>
                                @endforeach
                            </table>
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


