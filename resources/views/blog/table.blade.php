@extends('layouts.admin.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Post List</h4>
                        <a href="/blog/create" class="btn btn-rose btn-sm">Add a Post!</a>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>Id</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->content }}</td>
                                        <td class="text-primary">
                                            <a href="/blog/{{ $blog->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="/blog/{{ $blog->id }}/delete" class="btn btn-primary btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection