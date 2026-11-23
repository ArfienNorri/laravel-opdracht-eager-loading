<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->foreignId('solar_system_id')
                ->nullable()
                ->constrained('solar_systems');
        });
    }

    public function down(): void
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropConstrainedForeignId('solar_system_id');
        });
    }
};
