<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Slot\StoreRequest;
use App\Http\Requests\Api\Slot\UpdateRequest;
use App\Http\Resources\Slot\SlotResource;
use App\Models\Slot;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		return SlotResource::collection(Slot::all());

	}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
		$data = $request->validated();

		return Slot::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slot $slot)
    {
		return SlotResource::make($slot);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Slot $slot)
    {
		$slot->update($request->validated());

		return $slot;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slot $slot)
    {
		$slot->delete();
		return response([
			'message' => 'slot deleted successfully'
		]);
    }
}
