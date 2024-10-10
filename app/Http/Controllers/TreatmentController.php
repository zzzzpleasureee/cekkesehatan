<?php

namespace App\Http\Controllers;
use App\Models\treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index() 
    {
        $treatment = Treatment::all();
        return view('pages.treatment.index', compact('treatment'));
    }

    public function show($id)
    {
        $treatment = Treatment::find($id);
        return view('pages.treatment.show', compact('treatment'));
    }   

    public function create()
    {
        $treatment = Treatment::all();
        return view('pages.treatment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'nama_pasien' => 'required|max:133',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'tekanan_darah' => 'required',
        ],
        [
            'tanggal.required' => 'Tanggal harus diisi',
            'name.required' => 'Nama harus diisii',
            'name.max' => 'Nama harus diisi maksimal 128 karakter',
            'berat_badan.required' => 'Berat badan harus diisi',
            'tinggi_badan.required' => 'Tinggi badan harus diisi',
            'tekanan_darah.required' => 'Tekanan darah harus diisi',
        ]
        );
        $treatment = Treatment::create($request->all());
        return redirect()->route('admin.treatment.index');   // Return "Proses Simpan";
    }

    public function destroy($id) 
    {
        $treatment = Treatment::find($id);
        $treatment->delete();
        return redirect('admin.treatment');
    }

}
