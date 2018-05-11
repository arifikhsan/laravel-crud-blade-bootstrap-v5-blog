<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBlogPost;

class BlogController extends Controller
{
    public function index()
    {
        // $tables = array_map('current', DB::select('SHOW TABLES'));
        // dd($tables[0]);
        return view('blog.table', ['blogs' => Blog::orderBy('id', 'desc')->get()]);
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
        $blog = Blog::find($id);
        return $blog ? view('blog.single', ['blog' => $blog]) : abort(404);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return $blog ? view('blog.edit', ['blog' => $blog]) : abort(404);
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
