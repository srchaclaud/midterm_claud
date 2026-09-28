<?php

namespace App\Http\Controllers;

use App\Models\SshKey;
use Illuminate\Http\Request;

class SshKeyController extends Controller
{
    public function index()
    {
        $sshKeys = SshKey::all();

        return view('ssh_keys.index', compact('sshKeys'));
    }

    public function create()
    {
        return view('ssh_keys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'public_key' => 'required',
            'private_key' => 'nullable',
            'passphrase' => 'nullable',
        ]);

        SshKey::create([
            'name' => $request->name,
            'public_key' => $request->public_key,
            'private_key' => $request->private_key,
            'passphrase' => $request->passphrase,
        ]);

        return redirect()->route('ssh-keys.index');
    }

    public function destroy(SshKey $sshKey)
    {
        $sshKey->delete();

        return redirect()->route('ssh-keys.index');
    }
}