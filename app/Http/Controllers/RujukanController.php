<?php

namespace App\Http\Controllers;
use App\Models\Rujukan;
use Illuminate\Http\Request;

class RujukanController extends Controller
{
    public function index() 
    {
        $rujukan = Rujukan::all();
        return view('pages.rujukan.index', compact('rujukan'));
    }

    public function show($id)
    {
        $rujukan = Rujukan::find($id);
        return view('pages.rujukan.show', compact('rujukan'));
    }   

    public function create()
    {
        return view('pages.rujukan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rekam_medis'=> 'required',
            'dokter'=>'required',
            'nama_pasien'=>'required|max:128',
            'rumah_sakit'=>'required',
            'tanggal'=>'required',
        ], [
            'rekam_medis.required' => 'tanggal harus diisi.' ,
            'dokter.required' => 'Dokter harus diisi terlebih dahulu',
            'nama_pasien.required' => 'harus diisi',
            'rumah_sakit.required' => 'segera diisi',
            'tanggal.required' => 'diisi dulu yaa'
        ]);

        $rujukan = Rujukan::create($request->all());
        return redirect()->route('admin.rujukan.index');   // Return "Proses Simpan";
    }

    public function edit($id)
    {
        $rujukan = Rujukan::find($id);
        return view('pages.rujukan.edit', compact('rujukan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rekam_medis'=>'required|unique:rujukan,rekam_medis,'.$id,
        ]);

        $rujukan = Rujukan::find($id);
        $rujukan->update($request->all());
        return redirect()->route('admin.rujukan.index');
    }

    public function destroy($id)
    {
        $rujukan = Rujukan::find($id);
        $rujukan->delete();
        return redirect()->route('admin.rujukan.index');
    }


}
