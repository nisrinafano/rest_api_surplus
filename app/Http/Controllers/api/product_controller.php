<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class product_controller extends Controller
{
    public function index() {
        $product = product::all();

        if ($product) return api_formatter::create_api(200, 'Success', $product);
        else return api_formatter::create_api(400, 'Data not found');
    }

    public function show($id) {
        $product = product::find($id);

        if ($product) return api_formatter::create_api(200, 'Success', $product);
        else return api_formatter::create_api(400, 'Data not found');
    }
}
