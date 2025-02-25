<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Slider extends Model
{
    protected $table = 'ads_sliders';  

    protected $fillable = ['image', 'name', 'is_active'];

    public function getImageUrlAttribute()
    {
        return Storage::disk('public')->url($this->image);
    }
}
