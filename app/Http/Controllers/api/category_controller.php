<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\category;
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
}
