@extends('layouts.admin.master')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Edit an awesome post!</h4>
                    </div>
                    <div class="card-content table-responsive">
                        <form action="/blog/{{ $blog->id }}/update" method="post">
                            <div class="form-group">
                                <label for="title" class="bmd-label-floating">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $blog->title }}">
                                <span class="bmd-help">{{ $errors->has('title') ? $errors->first('title') : "" }}</span>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="3">{{ old('content') ? old('content') : $blog->content }}</textarea>
                                <span class="bmd-help">{{ $errors->has('content') ? $errors->first('content') : "" }}</span>
                            </div>
                            <input type="hidden" name="_method" value="PUT"> @csrf
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection