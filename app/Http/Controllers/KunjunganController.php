<?php

namespace App\Http\Controllers;
use App\Models\Kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function index() 
    {
        $kunjungan = Kunjungan::all();
        return view('pages.kunjungan.index', compact('kunjungan'));
    }

    public function show($id)
    {
        $kunjungan = Kunjungan::find($id);
        return view('pages.kunjungan.show', compact('kunjungan'));
    }   

    public function create()
    {
        return view('pages.kunjungan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal'=> 'required',
            'no_pasien'=>'required',
            'nama_pasien'=>'required|max:128',
            'umur'=>'required',
            'rekam_medis'=>'required',
            'treatment'=>'required',
            'rujukan'=>'required',
            'dokter'=>'required',
        ], [
            'tanggal.required' => 'tanggal harus diisi.' ,
            'no_paien.unique' => 'no_pasien sudah terdaftar, silahkan ubah Nama yang lain.' 
        ]);

        $kunjungan = Kunjungan::create($request->all());
        return redirect()->route('admin.kunjungan.index');   // Return "Proses Simpan";
    }

    public function edit($id)
    {
        $kunjungan = Kunjungan::find($id);
        return view('pages.kunjungan.edit', compact('kunjungan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_pasien'=>'required|unique:kunjungan,no_pasien,'.$id,
        ]);

        $kunjungan = Kunjungan::find($id);
        $kunjungan->update($request->all());
        return redirect()->route('kunjungan.index');
    }

    public function destroy($id)
    {
        $kunjungan = Kunjungan::find($id);
        $kunjungan->delete();
        return redirect()->route('admin.kunjungan');
    }


}
