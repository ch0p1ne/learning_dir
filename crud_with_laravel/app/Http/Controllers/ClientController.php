<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function create() {
        return view('client.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'age' => 'required|integer',
            'email' => 'required|email',
        ]);

        $client = Client::create($data);

        return redirect()->route('client.index')->with('success', 'Client created successfully');
    }

    public function update(Client $client) {
        return view('client.update', ['client' => $client]);
    }
    public function put(Request $request, client $client) {
        $data = $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'age' => 'required|integer',
            'email' => 'required|email',
        ]);

        $client->update($data);
        return redirect()->route('client.index')->with('success', 'Client updated successfully');
    }


    public function delete(Client $client) {
        $client->delete();
        return redirect()->route('client.index')->with('success', 'Client deleted successfully');
    }
}
