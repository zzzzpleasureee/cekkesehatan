<?php

namespace App\Http\Controllers;
use App\Models\Medical;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $medical = Medical::all(); 
        return view('pages.medical.index', compact('medical'));
    }

    public function show($id)
    {
        $medical = Medical::find($id);  
        return view('pages.medical.show', compact('medical'));
    }
    public function create()
    {
        return view('pages.medical.create');
    }

    public function store(Request $request)
    {
        // Validasi data input dari form
        $validatedData = $request->validate([
            'no_rm' => 'required',
            'tanggal_periksa' => 'required',
            'keluhan' => 'required',
            'lab' => 'required',
            'diagnosis' => 'required',
            'terapi' => 'required',
        ]);

        // Simpan data rekam medis baru ke database
        Medical::create([
            'no_rm' => $request->no_rm,
            'tanggal_periksa' => $request->tanggal_periksa,
            'keluhan' => $request->keluhan,
            'lab' => $request->lab,
            'diagnosis' => $request->diagnosis,
            'terapi' => $request->terapi,
        ]);

        return redirect()->route('medical.index')->with('success', 'Data rekam medis berhasil ditambahkan');
    }

    public function edit(Medical $medical)
    {
        return view('pages.medical.edit', compact('medical'));
    }

    public function update(Request $request, Medical $medical)
    {
        // Validasi data input (sama seperti di method store)
        // .....
        // Update data rekam medis
        $medical->update($request->all());
        return redirect()->route('medical.index')->with('success', 'Data rekam medis berhasil diperbarui');
    }

    public function destroy(Medical $medical)
    {
        $medical->delete();
        return redirect()->route('medical.index')->with('success', 'Data rekam medis berhasil dihapus');
    }
}
