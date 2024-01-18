<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category',
        'image_path',
        'location',
        'brand',
        'condition',
        'delivery',
        'payment',
        'confirmation_status',
        'sale_status',
    ];

    // Accessor to get the full URL for the image
    public function getImageUrlAttribute()
    {
        return asset('images/' . $this->image_path); // Return the full URL for the image
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
