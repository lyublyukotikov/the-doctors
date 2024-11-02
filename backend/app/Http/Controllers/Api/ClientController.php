<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\StoreRequest;
use App\Http\Requests\Api\Client\UpdateRequest;
use App\Http\Resources\Client\ClientResource;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		return ClientResource::collection(Client::all());

	}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
		$data = $request->validated();

		return Client::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
		return ClientResource::make($client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
		$client->update($request->validated());

		return $client;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
		$client->delete();
		return response([
			'message' => 'client deleted successfully'
		]);
    }
}
