<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AppConfig;
use Illuminate\Http\Request;

class AppConfigController extends Controller
{
    public function index()
    {
        return AppConfig::pluck('value', 'key');
    }
}
