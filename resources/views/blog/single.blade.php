@extends('layouts.admin.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">{{ $blog->title }}</h4>
                    </div>
                    <div class="card-content table-responsive">
                        <p>
                            {{ $blog->content }}
                        </p>
                        <a href="/blog/{{ $blog->id }}/edit" class="btn btn-primary btn-round">
                            <i class="material-icons">
                                edit
                            </i>
                            Edit this post
                        </a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection