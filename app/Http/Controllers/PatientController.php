<?php

namespace App\Http\Controllers;

use App\Http\Requests\storePatient;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Patients.index', ['Patients' => Patient::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePatient $request)
    {
        //$patient = Patient::create($request->only(['nom', 'tel', 'adresse', 'dob']));

        $patient = new Patient();
        $patient->NomPatient = $request->input('nom');
        $patient->telPatient = $request->input('tel');
        $patient->AdressePatient = $request->input('adresse');
        $patient->dob = $request->input('dob');
        $patient->save();
        $request->session()->flash('status', 'Patient ajoute avec succee');

        return redirect()->route('patients.index', ['Patients' => Patient::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Patients.edit', ['patient' => Patient::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storePatient $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->NomPatient = $request->input('nom');
        $patient->telPatient = $request->input('tel');
        $patient->AdressePatient = $request->input('adresse');
        $patient->dob = $request->input('dob');
        $patient->save();
        $request->session()->flash('status', 'Patient modifier avec succee');

        return redirect()->route('patients.index', ['Patients' => Patient::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $Patient = Patient::findOrFail($id);
        $Patient->delete();
        $request->session()->flash('status', 'Patient Supprimer avec succee');

        return redirect()->route('patients.index', ['Patients' => Patient::all()]);
    }
}
