<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //upload image
    public function uploadImage($image)
    {
        $imageName = $image->getClientOriginalName();
        $imagePath = public_path('images/'.$imageName);

// Check if the image already exists
        if (file_exists($imagePath)) {
            // Delete the existing image
            unlink($imagePath);
        }

// Move the uploaded image to the directory
        $image->move(public_path('images'), $imageName);

        return '/images/'.$imageName;
    }
}
