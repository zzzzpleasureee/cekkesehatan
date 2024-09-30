<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        return view('pages.form', compact('doctor'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5|max:128',
            'doctor' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|min:3|max:225',
            'tanggal_lahir' => 'required|max:64',
            'tempat_lahir' => 'required|max:64',
            'no_kartu_bpjs' => 'required|min:16|max:16',
            'phonenumber' => 'required|min:10|max:16',
            'dokter' => 'required',
            'golongan darah' => 'required'
        ]);

        $patient = Patient::create($request->all());
        return redirect()->route('form.index')->with('success', 'Data Pasien Berhasil.');
    }


}
