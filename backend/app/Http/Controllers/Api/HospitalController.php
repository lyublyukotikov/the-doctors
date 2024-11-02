<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Hospital\StoreRequest;
use App\Http\Requests\Api\Hospital\UpdateRequest;
use App\Http\Resources\Hospital\HospitalResource;
use App\Models\Hospital;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		return HospitalResource::collection(Hospital::all());

	}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
		$data = $request->validated();

		return Hospital::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hospital $hospital)
    {
		return HospitalResource::make($hospital);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Hospital $hospital)
    {
		$hospital->update($request->validated());

		return $hospital;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
		$hospital->delete();
		return response([
			'message' => 'hospital deleted successfully'
		]);
    }
}
