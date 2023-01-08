<?php

namespace App\Http\Controllers;

use App\Models\Scrup;
use Illuminate\Http\Request;

class ScrupController extends Controller
{
    public function index()
    {
        $title = "scrup";

        return view('scrup.index', [
            'title' => $title

        ]);
    }
    public function get()
    {
        $data = Scrup::orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $data,
        ]);
    }
}
