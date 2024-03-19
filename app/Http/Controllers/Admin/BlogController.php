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
        if ($request->ajax()) {
            $query = Blog::with('category')->orderBy('blogs.created_at','desc');

            $datatables = DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('image', function($row){
                    return $row->image;
                })
                ->addColumn('action', function($row){
                    $editUrl = route('admin.blog.edit', $row->id);
                    $deleteUrl = route('admin.blog.destroy', $row->id);

                    $btn = '<a href="javascript:" data-id="'.$row->id.'" data-url="'.route('admin.blog.edit', $row->id).'"
                    class="edit btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
                    $btn .= ' <a href="javascript:" data-id="'.$row->id.'" data-url="'.$deleteUrl.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
//                    $btn .= ' <a href="'.$deleteUrl.'" data-id="'.$row->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action', 'image'])
                ->setRowId(function ($data) {
                    return $data->id;
                });

            return $datatables->make(true);
        }

        $type_menu = 'team';
        $categories = Category::all();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();

        $data = [
            'blog' => $blog,
            'categories' => $categories
        ];
        return response()->json($data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $blog->image = $blog->uploadImage($image);
        }

        $blog->save();

        return response()->json(['message' => 'Blog updated successfully', 'blog' => $blog], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if ($blog) {
            $blog->delete();
            return response()->json(['message' => 'Blog post deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Blog post not found'], 404);
        }
    }
}
