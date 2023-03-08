<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\product_image;
use Exception;
use Illuminate\Http\Request;

class product_image_controller extends Controller
{
    public function index() {
        $product_image = product_image::all();

        if ($product_image) return api_formatter::create_api(200, 'Success', $product_image);
        else return api_formatter::create_api(400, 'Data not found');
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'product_id' => 'required',
                'image_id' => 'required'
            ]);

            $category = product_image::create([
                'product_id' => $request->product_id,
                'image_id' => $request->image_id
            ]);

            // show the inserted data
            $new_product_image = product_image::where('product_id', $request->image_id)->where('product_id', $request->image_id);

            if ($new_product_image) return api_formatter::create_api(200, 'Success', $new_product_image);
            else return api_formatter::create_api(400, 'Data not inserted');

        } catch (Exception $error) {
            return api_formatter::create_api(400, 'Failed');
        }
    }
}
