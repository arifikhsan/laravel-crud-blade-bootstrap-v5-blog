@extends('layouts.master')

@section('title', 'Blogque')

@section('content')
    <h1>{{ $blog->title }}</h1> <hr>
    <h3>{{ $blog->content }}</h3> <hr>
    <a href="/blog/{{ $blog->id }}/edit">Edit this post</a>
@endsection