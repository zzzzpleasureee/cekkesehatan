<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller

{
    public function index() 
    {
        $patient = Patient::orderBy('created_at', 'DESC')->get();
        return view('pages.patient.index', compact('patient'));
    }

    public function show($id) 
    {
        $patient = Patient::find($id);
        return view('pages.patient.show', compact('patients'));
    }

    public function destroy($id) 
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('admin/patient');
    }

}
