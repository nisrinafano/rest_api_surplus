<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\product;
use Exception;
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

    public function store(Request $request) {
        try {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'enable' => 'required'
            ]);

            $product = product::create([
                'name' => $request->name,
                'description' => $request->description,
                'enable' => $request->enable
            ]);

            // show the inserted data
            $new_product = product::find($product->id);

            if ($new_product) return api_formatter::create_api(200, 'Success', $new_product);
            else return api_formatter::create_api(400, 'Data not inserted');

        } catch (Exception $error) {
            return api_formatter::create_api(400, 'Failed');
        }
    }

    public function update(Request $request, int $id) {
        try {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'enable' => 'required'
            ]);

            $product = product::find($id);

            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'enable' => $request->enable
            ]);

            // show the updated data
            $updated_product = product::find($product->id);

            if ($updated_product) return api_formatter::create_api(200, 'Success', $updated_product);
            else return api_formatter::create_api(400, 'Data not updated');

        } catch (Exception $error) {
            return api_formatter::create_api(400, 'Failed');
        }
    }

    public function destroy(int $id) {
        $product = product::find($id);

        $deleted_product = $product->delete();

        if ($deleted_product) return api_formatter::create_api(200, 'Success');
        else return api_formatter::create_api(400, 'Data not deleted');
    }
}
