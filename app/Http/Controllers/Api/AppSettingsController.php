<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AppSettings;
use Illuminate\Http\Request;

class AppSettingsController extends Controller
{
    public function getAppSettings()
    {
        $settings = AppSettings::first();
        return response()->json($settings);
    }
}
