@extends('layouts.master')
@section('title', 'Blog sekolah koding')
@section('content')
<h1>Add Post!</h1>
<hr>

<form action="/blog/store" method="post">
    <input type="text" name="title" id="title" value="{{ old('title') }}"><br>
    {{ $errors->has('title') ? $errors->first('title') : "" }} <br>
    <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea><br>
    {{ $errors->has('content') ? $errors->first('content') : "" }} <br>
    <input type="submit" value="Submit" name="submit"> @csrf
</form>
@endsection