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
        $this->validate($request,[
            'nama'=>'required',
            'no_inventaris'=>'required',
            'qty'=>'required',
            'jenis_barang'=>'required',
            'tanggal_pembelian' =>'required'
        ]);

        $data = Sperpat::create([
            'nama' => $request->nama,
            'no_inventaris' => $request->no_inventaris,
            'qty' => $request->qty,
            'jenis_barang' => $request->jenis_barang,
            'tanggal_pembelian'=>$request->tanggal_pembelian
        ]);
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
