<?php

namespace App\Http\Controllers;


use App\Models\Patient\Patient;
use App\Repositories\Patient\PatientContract;
use Illuminate\Http\Request;

class PatientController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @param PatientContract $patientContract
     * @return \Illuminate\Http\Response
     */
    public function index(PatientContract $patientContract)
    {
        return $this->setStatusCode(200)->respond($patientContract->getAll());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param PatientContract $contract
     * @return array
     */
    public function store(Request $request,PatientContract $contract)
    {

         $contract->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return $this->setStatusCode(200)->respond($patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Patient $patient
     * @param PatientContract $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient,PatientContract $contract)
    {
        //
//        $contract->create($request->all());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Patient $patient
     * @param PatientContract $patientContract
     * @return Patient
     */
    public function update(Request $request,Patient $patient,PatientContract $patientContract)
    {
        $patientContract->update($patient, $request->all());
//
        return $this->setStatusCode(200)->respond($patient);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
