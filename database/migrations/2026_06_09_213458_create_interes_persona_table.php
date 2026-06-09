<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('interes_persona', function (Blueprint $table) {
            $table->id();

            $table->foreignId('persona_id')
                ->constrained('personas')
                ->onDelete('cascade');

            $table->foreignId('interes_id')
                ->constrained('intereses')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('interes_persona');
    }
};