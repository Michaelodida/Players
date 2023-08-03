<?php

namespace App\Http\Controllers;

use App\Models\patients;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = patients::all();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        patients::create($request->all());
        
        return redirect()->route('patients.index')
                        ->with('success','Player created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient=patients::find($id);
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patients $patients, $id)
    {
        $patient = patients::find($id);
        $patient->update($request->all());
        
        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = patients::where('id', $id)->firstorfail()->delete();
        
        return redirect()->route('patients.index');
    }
}
