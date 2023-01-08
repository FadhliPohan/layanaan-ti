<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index()
    {
        $title = "inventaris";

        return view('inventaris.index', [
            'title' => $title

        ]);
    }
    public function get()
    {
        $data = Inventaris::orderBy('id', 'DESC')->get();
        return response()->json([
            'data' => $data,
        ]);
    }
}
