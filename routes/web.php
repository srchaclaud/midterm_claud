<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SshKeyController;
use App\Http\Controllers\ServerController;

Route::get('/', function () {
    return redirect()->route('ssh-keys.index');
});

// SSH Keys
Route::get('/ssh-keys', [SshKeyController::class, 'index'])->name('ssh-keys.index');
Route::get('/ssh-keys/create', [SshKeyController::class, 'create'])->name('ssh-keys.create');
Route::post('/ssh-keys', [SshKeyController::class, 'store'])->name('ssh-keys.store');
Route::delete('/ssh-keys/{sshKey}', [SshKeyController::class, 'destroy'])->name('ssh-keys.destroy');

// Servers
Route::get('/servers', [ServerController::class, 'index'])->name('servers.index');
Route::get('/servers/create', [ServerController::class, 'create'])->name('servers.create');
Route::post('/servers', [ServerController::class, 'store'])->name('servers.store');
Route::delete('/servers/{server}', [ServerController::class, 'destroy'])->name('servers.destroy');