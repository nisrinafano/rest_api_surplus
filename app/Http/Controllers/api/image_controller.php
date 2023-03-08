<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\image;
use Illuminate\Http\Request;

class image_controller extends Controller
{
    public function index() {
        $image = image::all();

        if ($image) return api_formatter::create_api(200, 'Success', $image);
        else return api_formatter::create_api(400, 'Data not found');
    }

    public function show($id) {
        $image = image::find($id);

        if ($image) return api_formatter::create_api(200, 'Success', $image);
        else return api_formatter::create_api(400, 'Data not found');
    }
}
