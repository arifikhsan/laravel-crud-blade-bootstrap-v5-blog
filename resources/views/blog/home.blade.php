@extends('layouts.master')
@section('title', 'Blog sekolah koding')
@section('content')
    <h1>Blog Posts</h1>
    <p><a href="/blog/create">Add a Post!</a></p>
    <hr>

    @foreach($blogs as $blog)
        <li>
            <a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a> ||
            <a href="/blog/{{ $blog->id }}/edit">Edit</a> | 
            <a href="/blog/{{ $blog->id }}/delete">Delete</a> ||
        </li>
    @endforeach
@endsection