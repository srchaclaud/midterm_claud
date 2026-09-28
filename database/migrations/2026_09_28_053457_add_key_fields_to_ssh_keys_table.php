<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ssh_keys', function (Blueprint $table) {

            if (!Schema::hasColumn('ssh_keys', 'name')) {
                $table->string('name');
            }

            if (!Schema::hasColumn('ssh_keys', 'public_key')) {
                $table->text('public_key')->nullable();
            }

            if (!Schema::hasColumn('ssh_keys', 'private_key')) {
                $table->text('private_key')->nullable();
            }

            if (!Schema::hasColumn('ssh_keys', 'passphrase')) {
                $table->string('passphrase')->nullable();
            }
        });
    }

    public function down(): void
    {
        //
    }
};