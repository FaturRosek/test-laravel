<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Penerbit;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenerbitController extends Controller
{
    public function index()
    {
        try {
            $data = Penerbit::all();
            return ResponseFormatter::success($data, 'Data berhasil diambil');
        } catch (\Throwable $th) {
            return ResponseFormatter::error($th->getMessage(), 'data berhasil diambil', 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = Validator::make($request->all(), [
                'nama_penerbit' => 'required|unique:penerbits|string|max:255',
                'alamat' => 'required|string',
                'no_telepon' => 'required|numeric|max_digits:13'
            ]);
            if ($validated->fails()) {
                return ResponseFormatter::error($validated->messages(), "data gagal disimpan", 400);
            }

            $data = Penerbit::create([
                'nama_penerbit' => $request->nama_penerbit,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
            ]);

            return ResponseFormatter::success($data, 'data berhasil disimpan');
        } catch (\Throwable $th) {
            return ResponseFormatter::error($th->getMessage(), 'server eror', 500);
        }
    }
}
