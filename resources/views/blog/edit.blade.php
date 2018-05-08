@extends('layouts.master')
@section('title', 'Blog sekolah koding')
@section('content')
    <h1>Edit Post</h1>
    <hr>

<form action="/blog/{{ $blog->id }}/update" method="post">
    <input type="text" name="title" id="title" value="{{ old('title') ? old('title') : $blog->title }}"><br>
    {{ $errors->has('title') ? $errors->first('title') : "" }} <br>
    <textarea name="content" id="content" cols="30" rows="10">{{ old('content') ? old('content') : $blog->content }}</textarea><br>
    {{ $errors->has('content') ? $errors->first('content') : "" }} <br>
    <input type="submit" value="Update" name="submit">
    <input type="hidden" name="_method" value="PUT"> @csrf
</form>
@endsection