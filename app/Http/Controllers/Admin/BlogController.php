<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $blog = Blog::all();
        $categories = Category::all();

        return view('pages.blog.blog', compact('type_menu','categories','blog'));
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
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        // Create a new instance of the Blog model
        $blog = new Blog;

        // Assign the validated data to the model's properties
        $blog->title = $data['title'];
        $blog->slug = Str::slug($data['title']);
        $blog->category_id = $data['category_id'];
        $blog->description = $data['description'];

        // Handle the image upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $blog->image = $blog->uploadImage($image);
        }

        // Save the model instance to the database
        $blog->save();
//        dd($blog);

      return response()->json(['success' => 'Data is successfully added' , 'blog' => $blog], 200);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
