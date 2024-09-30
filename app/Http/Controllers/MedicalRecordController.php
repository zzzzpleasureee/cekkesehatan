<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $medicalRecords = MedicalRecord::all(); 
        return view('medical-record.index', compact('medicalRecords'));
    }

    public function show($id)
    {
        $medicalRecord = MedicalRecord::find($id);  
        return view('medical-record.show', compact('medicalRecord'));
    }
    public function create()
    {
        return view('medical-record.create');
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
        MedicalRecord::create([
            'no_rm' => $request->no_rm,
            'tanggal_periksa' => $request->tanggal_periksa,
            'keluhan' => $request->keluhan,
            'lab' => $request->lab,
            'diagnosis' => $request->diagnosis,
            'terapi' => $request->terapi,
        ]);

        return redirect()->route('medical-record.index')->with('success', 'Data rekam medis berhasil ditambahkan');
    }

    public function edit(MedicalRecord $medicalRecord)
    {
        return view('medical-record.edit', compact('medicalRecord'));
    }

    public function update(Request $request, MedicalRecord $medicalRecord)
    {
        // Validasi data input (sama seperti di method store)
        // .....
        // Update data rekam medis
        $medicalRecord->update($request->all());
        return redirect()->route('medical-record.index')->with('success', 'Data rekam medis berhasil diperbarui');
    }

    public function destroy(MedicalRecord $medicalRecord)
    {
        $medicalRecord->delete();
        return redirect()->route('medical-record.index')->with('success', 'Data rekam medis berhasil dihapus');
    }
}
