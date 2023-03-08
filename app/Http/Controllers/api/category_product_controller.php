<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\category_product;
use Exception;
use Illuminate\Http\Request;

class category_product_controller extends Controller
{
    public function index() {
        $category_product = category_product::all();

        if ($category_product) return api_formatter::create_api(200, 'Success', $category_product);
        else return api_formatter::create_api(400, 'Data not found');
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'category_id' => 'required',
                'product_id' => 'required'
            ]);

            $category_product = category_product::create([
                'category_id' => $request->category_id,
                'product_id' => $request->product_id
            ]);

            // show the inserted data
            $new_category_product = category_product::where('category_id', $request->category_id)->where('product_id', $request->product_id);

            if ($new_category_product) return api_formatter::create_api(200, 'Success', $new_category_product);
            else return api_formatter::create_api(400, 'Data not inserted');

        } catch (Exception $error) {
            return api_formatter::create_api(400, 'Failed');
        }
    }

    public function update(Request $request, int $category_id, int $product_id) {
        try {
            $request->validate([
                'category_id' => 'required',
                'product_id' => 'required'
            ]);

            $category_product = category_product::where('category_id', $category_id)->where('product_id', $product_id);
            $category_product->update([
                'category_id' => $request->category_id,
                'product_id' => $request->product_id
            ]);

            if ($category_product) return api_formatter::create_api(200, 'Success');
            else return api_formatter::create_api(400, 'Data not updated');

        } catch (Exception $error) {
            return api_formatter::create_api(400, 'Failed');
        }
    }

    public function destroy(int $category_id, int $product_id) {
        $category_product = category_product::where('category_id', $category_id)->where('product_id', $product_id);
        
        $deleted_category_product = $category_product->delete();

        if ($deleted_category_product) return api_formatter::create_api(200, 'Success');
        else return api_formatter::create_api(400, 'Data not deleted');
    }
}
