<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $clients = Client::all();
        return view('client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        //

        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request): RedirectResponse
    {
        //

        Client::create($request->all());

        return redirect()->route('client.index')->with('success', 'client created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client):View
    {
        //
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client):view
    {
        //
         //
         return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client):RedirectResponse
    {
        //
        $client->update($request->all());
        return redirect()->route('client.index')->with('success','client updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client): RedirectResponse
    {
        //
        $client->delete();
        return redirect()->route('client.index')->with('danger','client deleted');
    }
}
