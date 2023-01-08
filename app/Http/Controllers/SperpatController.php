<?php

namespace App\Http\Controllers;

use App\Models\Sperpat;
use Illuminate\Http\Request;

class SperpatController extends Controller
{
    public function index()
    {
        $title = "Sperpat";

        return view('sperpat.index', [
            'title' => $title

        ]);
    }

    public function get()
    {
        $data = Sperpat::orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        # code...
    }

    public function destroy($id)
    {
    }

    public function getById($id)
    {
        # code
    }

    public function update(Request $request, $id)
    {
        # code...
    }
}
