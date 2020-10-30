<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDoctor;
use App\Models\Doctor;
use App\Models\Specialite;
use Illuminate\Http\Request;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Doctors.index', ['Doctors' => Doctor::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Doctors.create', ['Specialites' => Specialite::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDoctor $request)
    {
        $doctor = new Doctor();
        $specialie = Specialite::findOrFail($request->input('specialite'));
        $doctor->NomMedecin = $request->input('nom');
        $doctor->telMedecin = $request->input('tel');
        $doctor->AdresseMedecin = $request->input('adresse');
        $specialie->doctor()->save($doctor);
        $request->session()->flash('status', 'Medecin ajouter avec succesee');
        return redirect()->route('medecins.index', ['Doctors' => Doctor::all()]);
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
        return view('Doctors.edit', ['Doctor' => Doctor::findOrFail($id), 'Specialites' => Specialite::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        $req->session()->flash('status', 'suprimer avec success');
        return redirect()->route('medecins.index', ['Doctors' => Doctor::all()]);
    }
}
