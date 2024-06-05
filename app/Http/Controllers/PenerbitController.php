<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenerbitRequest;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbit = Penerbit::all();
        return view('pages.penerbit.index', compact('penerbit'));
    }

    public function create()
    {
        return view('pages.penerbit.create');
    }

    public function store(StorePenerbitRequest $request)
    {
        // Menggunakan bawaan controller request
        // $validated = $request->validate([
        //     'nama_penerbit' => 'required|unique:penerbits|string|max:255',
        //     'alamat' => 'required|string',
        //     'no_telepon' => 'required|numeric|max_digits:13'
        // ]);

        // Menggunakan Validator facedess
        // $validated = Validator::make($request->all(), [
        //     'nama_penerbit' => 'required|unique:penerbits|string|max:255',
        //     'alamat' => 'required|string',
        //     'no_telepon' => 'required|numeric|max_digits:13'
        // ]);
        // if ($validated->fails()) {
        //     return redirect('/create')
        //         ->withErrors($validated)
        //         ->withInput();
        // }

        // Menggunakan Request

        Penerbit::create([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect('/')->with('sukses', 'Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $penerbit = Penerbit::find($id);
        return view('pages.penerbit.edit', compact('penerbit'));
    }
    public function update(Request $request)
    {
        Penerbit::where('id', $request->id)->update([
            'nama_penerbit' => $request->nama_penerbit,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect('/');
    }
    public function destroy($id)
    {
        $penerbit = Penerbit::destroy($id);
        return redirect('/');
    }
}
