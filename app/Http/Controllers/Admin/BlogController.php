<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_menu = 'team';
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $categories = Category::all();

        return view('pages.blog.blog', compact('type_menu','categories','blogs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request): \Illuminate\Http\RedirectResponse
    {
        $requestData = $request->all();
        $requestData['slug'] = Str::slug($request->title);

        $blog = Blog::create($requestData);

        // Handle the image upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $blog->uploadImage($image);

            // Update the image attribute
            $blog->update(['image' => $imageName]);
        }

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
    public function edit(Blog $id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();

        if (request()->expectsJson()) {
            $blog->image = asset($blog->image);
            return response()->json($blog);
        }

        return view('pages.blog.editBlog', compact('blog', 'categories'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $blog = Blog::findOrFail($id);
        $requestData = $request->all();
        $requestData['slug'] = Str::slug($request->title);

        // Handle the image upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $requestData['image'] = $blog->uploadImage($image);
        } else {
            $requestData['image'] = $request->old_image;
        }

        $blog->update($requestData);

        // Return the URL of the uploaded image
//        return response()->json(['image' => asset($requestData['image'])]);
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
