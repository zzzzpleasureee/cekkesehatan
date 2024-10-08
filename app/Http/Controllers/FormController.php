<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class FormController extends Controller

{
    public function index() 
    {
        $doctors = Doctor::all();
        return view('pages.form', compact('doctors'));
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
                'golongan_darah' => 'required'
            ],
            [
                'name.required' => 'Nama harus diisi', 
                'tempat_lahir.required' => 'Tempat lahir harus diisi',
                'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
                'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
                'alamat.required' => 'Alamat harus diisi',
                'no_kartu_bpjs.required' => 'No kartu BPJS harus diisi',
                'no_hp.required' => 'No HP harus diisi',
                'dokter.required' => 'Dokter harus diisi',
                'golongan_darah.required' => 'Golongan darah harus diisi'

            ]
        );

        $patient = Patient::create($request->all());
        return redirect()->route('form.index')->with('success', 'Data Pasien Berhasil.');
    }

    public function destroy($id) 
    {
        $patients = Patient::find($id);
        $patients->delete();
        return redirect('admin.patient');
    }

}