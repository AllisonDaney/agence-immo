<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'area',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'address',
        'postal_code',
        'city',
        'sold',
    ];

    public function getSlug(): string {
        return Str::slug($this->title);
    }
}
