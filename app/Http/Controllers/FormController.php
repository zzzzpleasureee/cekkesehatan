<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class FormController extends Controller

{
    public function index() 
    {
        $doctor = Doctor::all();

        $patient = Patient::orderBy('created_at', 'DESC')->get();
        return view('pages.form', compact('doctor'));
    }


    public function show(Request $id)
    {
        $patients = Patient::find($id);
        return view('pages.patient.show', compact('patient'));
    }   

    public function create()
    {
        $doctor = Doctor::orderBy('name', 'ASC')->get();
        return view('pages.form', compact('doctor'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:128',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|min:3|max:225',
            'tanggal_lahir' => 'required|max:64',
            'tempat_lahir' => 'required|max:64',
            'no_kartu_bpjs' => 'required|max:16',
            'no_hp' => 'required|min:10|max:16',
            'dokter' => 'required',
            'golongan darah' => 'required'
        ],
        [
            'name.required' => 'Nama harus diisiiiiiiiiiiii',
            'name.min' => 'Nama harus diisi minimal 5 karakter',
            'name.max' => 'Nama harus diisi maksimal 128 karakter',

        ]
    );

        Patient::create([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'no_kartu_bpjs' => $request->no_kartu_bpjs,
            'no_hp' => $request->no_hp,
            'dokter' => $request->dokter,
            'golongan darah' => $request->golongan_darah
        ]);
        return redirect()->route('pages.tes')->with('success', 'Data Pasien Berhasil.');
    }

    public function destroy($id) 
    {
        $patients = Patient::find($id);
        $patients->delete();
        return redirect('admin.patient');
    }

}
