<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\product_image;
use Illuminate\Http\Request;

class product_image_controller extends Controller
{
    public function index() {
        $product_image = product_image::all();

        if ($product_image) return api_formatter::create_api(200, 'Success', $product_image);
        else return api_formatter::create_api(400, 'Data not found');
    }
}
