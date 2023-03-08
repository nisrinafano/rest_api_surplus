<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\category;
use Exception;
use Illuminate\Http\Request;

class category_controller extends Controller
{
    public function index() {
        $category = category::all();

        if ($category) return api_formatter::create_api(200, 'Success', $category);
        else return api_formatter::create_api(400, 'Data not found');
    }

    public function show($id) {
        $category = category::find($id);

        if ($category) return api_formatter::create_api(200, 'Success', $category);
        else return api_formatter::create_api(400, 'Data not found');
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'name' => 'required',
                'enable' => 'required'
            ]);

            $category = category::create([
                'name' => $request->name,
                'enable' => $request->enable
            ]);

            // show the inserted data
            $new_category = category::find($category->id);

            if ($new_category) return api_formatter::create_api(200, 'Success', $new_category);
            else return api_formatter::create_api(400, 'Data not inserted');

        } catch (Exception $error) {
            return api_formatter::create_api(400, 'Failed');
        }
    }
}
