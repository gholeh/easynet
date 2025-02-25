<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;

class CountryController extends Controller
{
    public function getPopularCountries()
    {
        $countries = Country::where('is_active', true)->get();

        $countries->map(function($slider) {
            $slider->image = url(Storage::url($slider->image)); 
            return $slider;
             });
             
        return response()->json($countries);
    }
}
