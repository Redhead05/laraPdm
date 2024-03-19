<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jabatan',
        'fb',
        'twitter',
        'instagram',
        'start_date',
        'end_date',
        'image',
        'slug',
        ];

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

    public function getStartDateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    public function getEndDateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }
}
