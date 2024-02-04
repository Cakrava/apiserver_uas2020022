<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 */
    public function index(Request $request)
    {
        $query = Buku::query();
        if (request()->has("search")) {
            $search = $request->get("search");
            $query->where("idbuku", "like", "%" . $search . "%")
                ->orWhere("judul", "like", "%" . $search . "%");
        }
        $buku = $query->paginate(10);

        return BukuResource::collection($buku);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'idbuku' => 'required|unique:buku,idbuku|min:7|max:7',
            'judul' => 'required|max:100',
            'genre' => 'required|in:Drama,Psikologi,Action,Fantasi',
            'tanggalTerbit' => 'required|date',
            'noRak' => 'required|max:20',
        ], [
            'idbuku.required' => ':attribute tidak boleh kosong',
            'idbuku.unique' => ':attribute sudah ada',
            'idbuku.min' => 'Minimal 7 karakter',
            'idbuku.max' => 'Maksimal 7 karakter',
            'judul.required' => ':attribute tidak boleh kosong',
            'genre.required' => ':attribute tidak boleh kosong',

            'tanggalTerbit.required' => ':attribute tidak boleh kosong',

            'noRak.required' => ':attribute tidak boleh kosong',
        ], [
            'idbuku' => 'ID Buku',
            'judul' => 'Nama Lengkap',
            'genre' => 'Jenis Kelamin',
            'tanggalTerbit' => 'TanggalLahir',
            'noRak' => 'No.Telp',

        ]);
        $buku = Buku::create($data);
        return new BukuResource($buku);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
