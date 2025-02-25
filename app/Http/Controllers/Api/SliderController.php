<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{
    public function getActiveSliders()
    {
        $sliders = Slider::where('is_active', true)->get();

        $sliders->map(function($slider) {
        $slider->image = url(Storage::url($slider->image)); 
        return $slider;
         });

        return response()->json($sliders);
    }
}
