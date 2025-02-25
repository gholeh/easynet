<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Country extends Model
{
    protected $table = 'popular_countries';

    protected $fillable = ['country_code', 'image', 'price_start_from', 'country_name', 'is_active'];

    public function getImageUrlAttribute()
    {
        return Storage::disk('public')->url($this->image);
    }
}
