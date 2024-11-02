<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Record\StoreRequest;
use App\Http\Requests\Api\Record\UpdateRequest;
use App\Http\Resources\Record\RecordResource;
use App\Models\Record;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		return RecordResource::collection(Record::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
		$data = $request->validated();

		return Record::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
		return RecordResource::make($record);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Record $record)
    {
		$record->update($request->validated());

		return $record;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
		$record->delete();
		return response([
			'message' => 'record deleted successfully'
		]);
    }
}
