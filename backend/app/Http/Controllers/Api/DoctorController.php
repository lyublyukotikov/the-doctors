<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Doctor\StoreRequest;
use App\Http\Requests\Api\Doctor\UpdateRequest;
use App\Http\Resources\Doctor\DoctorResource;
use App\Models\Doctor;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
	{
        return DoctorResource::collection(Doctor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
		$data = $request->validated();

		return Doctor::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return DoctorResource::make($doctor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Doctor $doctor): Doctor
	{
		$doctor->update($request->validated());

		return $doctor;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
		$doctor->delete();
		return response([
			'message' => '$doctor deleted successfully'
		]);
    }
}
