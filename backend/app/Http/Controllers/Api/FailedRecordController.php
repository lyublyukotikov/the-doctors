<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\FailedRecord\StoreRequest;
use App\Http\Requests\Api\FailedRecord\UpdateRequest;
use App\Http\Resources\FailedRecord\FailedRecordResource;
use App\Models\FailedRecord;

class FailedRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		return FailedRecordResource::collection(FailedRecord::all());

	}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
		$data = $request->validated();

		return FailedRecord::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(FailedRecord $failedRecord)
    {
		return FailedRecordResource::make($failedRecord);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, FailedRecord $failedRecord)
    {
		$failedRecord->update($request->validated());

		return $failedRecord;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FailedRecord $failedRecord)
    {
		$failedRecord->delete();
		return response([
			'message' => 'failedRecord deleted successfully'
		]);
    }
}
