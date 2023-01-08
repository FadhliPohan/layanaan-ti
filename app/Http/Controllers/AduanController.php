<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $title = "aduan";
        return view('aduan.index', [
            'title' => $title,
        ]);
    }

    public function get()
    {
        $data = Aduan::orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function getById($id)
    {
        # code...
    }

    public function destroy($id)
    {
        # code...
    }

    public function store(Request $request)
    {
        # code...
    }

    public function update(Request $request, $id)
    {
        # code...
    }
}
