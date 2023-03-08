<?php

namespace App\Http\Controllers\api;

use App\Helpers\api_formatter;
use App\Http\Controllers\Controller;
use App\Models\image;
use Exception;
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

    public function store(Request $request) {
        try {
            $request->validate([
                'name' => 'required',
                'file' => 'required',
                'enable' => 'required'
            ]);

            $image = image::create([
                'name' => $request->name,
                'file' => $request->file,
                'enable' => $request->enable
            ]);

            // show the inserted data
            $new_image = image::find($image->id);

            if ($new_image) return api_formatter::create_api(200, 'Success', $new_image);
            else return api_formatter::create_api(400, 'Data not inserted');

        } catch (Exception $error) {
            return api_formatter::create_api(400, 'Failed');
        }
    }

    public function update(Request $request, int $id) {
        try {
            $request->validate([
                'name' => 'required',
                'file' => 'required',
                'enable' => 'required'
            ]);

            $image = image::find($id);

            $image->update([
                'name' => $request->name,
                'file' => $request->file,
                'enable' => $request->enable
            ]);

            // show the updated data
            $updated_image = image::find($image->id);

            if ($updated_image) return api_formatter::create_api(200, 'Success', $updated_image);
            else return api_formatter::create_api(400, 'Data not updated');

        } catch (Exception $error) {
            return api_formatter::create_api(400, 'Failed');
        }
    }

    public function destroy(int $id) {
        $image = image::find($id);

        $deleted_image = $image->delete();

        if ($deleted_image) return api_formatter::create_api(200, 'Success');
        else return api_formatter::create_api(400, 'Data not deleted');
    }
}
