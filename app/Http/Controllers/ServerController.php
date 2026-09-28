<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function index()
    {
        $servers = Server::all();

        return view('servers.index', compact('servers'));
    }

    public function create()
    {
        return view('servers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'host' => 'required',
            'username' => 'required',
            'port' => 'required',
        ]);

        Server::create($request->all());

        return redirect()->route('servers.index');
    }

    public function destroy(Server $server)
    {
        $server->delete();

        return redirect()->route('servers.index');
    }
}