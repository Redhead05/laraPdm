<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
            $type_menu = 'dashboard';
            $categories = Category::all();
        if ($request->ajax()) {
            $data = Blog::with('category')->latest()->get();
            $data = $data->sortByDesc('id');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function($row){
                    return $row->image; // Assuming 'image' is the column name in your blogs table
                })
                ->addColumn('action', function($row){
                    $editUrl = route('admin.blog.edit', $row->id);
                    $deleteUrl = route('admin.blog.destroy', $row->id);

                    $btn = '<a href="javascript:" data-id="'.$row->id.'" data-url="'.route('admin.blog.edit', $row->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
                    $btn .= ' <a href="'.$deleteUrl.'" class="delete btn btn-danger btn-sm">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action', 'image']) // Add 'image' to rawColumns to avoid escaping HTML
                ->make(true);
        }
        return view('pages.blog.blog', compact('type_menu', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.blog.createBlog', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog;

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $blog->image = $blog->uploadImage($image);
        }

        $blog->slug = Str::slug($request->title, '-');

        $blog->save();

        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
//        dd($blog);
        return response()->json($blog);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $blog->image = $blog->uploadImage($image);
        }

        $blog->slug = Str::slug($request->title, '-');

        $blog->save();

        return redirect()->route('admin.blog.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blog.index');
    }

}
