<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('corsis', function (Blueprint $table) {
            $table->id();
            $table->integer('totale_partecipanti')->default(0); // Totale dei partecipanti inizializzato a 0
            $table->foreignId('activitie_id');
            $table->foreign('activitie_id')->references('id')->on('activities')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corsis');
    }
};
