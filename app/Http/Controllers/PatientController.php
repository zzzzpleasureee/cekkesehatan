<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller

{
    public function index() 
    {
        $patients = Patient::all();
        return view('pages.patient.index', compact('patients'));
    }

    public function show($id)
    {
        $patients = Patient::find($id);
        return view('pages.patient.show', compact('patients'));
    }   

    public function create()
    {
        $doctors = Doctor::all();
        return view('pages.patient.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:128',
            'tempat_lahir'=>'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|max:225',
            'no_kartu_bpjs' => 'required|max:16',
            'no_hp' => 'required|min:10|max:16',
            'dokter' => 'required',
            'golongan darah' => 'required'
        ],
        [
            'name.required' => 'Nama harus diisiiiiiiiiiiii',
            'name.max' => 'Nama harus diisi maksimal 128 karakter',

        ]
        );
        $patients = Patient::create($request->all());
        // return redirect()->route('form.index')->with('success', 'Data Pasien Berhasil.');
    }

    public function destroy($id) 
    {
        $patients = Patient::find($id);
        $patients->delete();
        return redirect('admin.patients');
    }

}
