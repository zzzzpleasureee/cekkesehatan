<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller

{
    public function index() 
    {
        $patient = Patient::orderBy('created_at', 'DESC')->get();
        return view('pages.patient.index', compact('patient'));
    }

    public function show(Request $id)
    {
        $patients = Patient::find($id);
        return view('pages.patient.show', compact('patients'));
    }   

    public function create()
    {
        $doctor = Doctor::all();
        return view('pages.patient.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:128',
            'doctor' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|min:3|max:225',
            'tanggal_lahir' => 'required|max:64',
            'tempat_lahir' => 'required|max:64',
            'no_kartu_bpjs' => 'required|max:16',
            'phonenumber' => 'required|min:10|max:16',
            'dokter' => 'required',
            'golongan darah' => 'required'
        ],
        [
            'name.required' => 'Nama harus diisiiiiiiiiiiii',
            'name.max' => 'Nama harus diisi maksimal 128 karakter',

        ]
    );

        $patient = Patient::create($request->all());
        // return redirect()->route('form.index')->with('success', 'Data Pasien Berhasil.');
    }

    public function destroy($id) 
    {
        $patients = Patient::find($id);
        $patients->delete();
        return redirect('admin.patient');
    }

}
