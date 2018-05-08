<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use App\Http\Requests\UpdateBlogPost;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.home', ['blogs' => Blog::all()]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(StoreBlogPost $request)
    {
        return Blog::create($request->only('content', 'title')) ? redirect('blog') : abort(422);
    }

    public function show($id)
    {
        $blog = Blog::find($id); $blog ?: abort(404);
        return view('blog.single', ['blog' => $blog]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id); $blog ?: abort(404);
        return view('blog.edit', ['blog' => $blog]);
    }

    public function update(StoreBlogPost $request, $id)
    {
        return Blog::find($id)->update($request->only('content', 'title')) ? redirect('blog/' . $id) : abort(422);
    }

    public function destroy($id)
    {
        return Blog::destroy($id) ? redirect('blog') : abort(422);
    }
}
