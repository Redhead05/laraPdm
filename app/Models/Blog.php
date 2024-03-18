<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

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

        // chek jika file sudah ada
        if (file_exists($imagePath)) {
            // Delete the existing image
            unlink($imagePath);
        }

        // save ke directory
        $image->move(public_path('images'), $imageName);

        // cara update attribute image
        $this->attributes['image'] = '/images/'.$imageName;

        return $this->attributes['image'];
    }

    //slug
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }

    // Accessor descripton dari database ke view
//    public function getDescriptionAttribute($value)
//    {
//        return strip_tags($value);
//    }
//    // Mutator description dari add view ke database
//    public function getRawDescriptionAttribute()
//    {
//        return $this->attributes['description'];
//    }
}
