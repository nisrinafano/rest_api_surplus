<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\category_product;
use Illuminate\Http\Request;

class category_product_controller extends Controller
{
    public function index() {
        $category_product = category_product::all();

        if ($category_product) return api_formatter::create_api(200, 'Success', $category_product);
        else return api_formatter::create_api(400, 'Data not found');
    }
}
