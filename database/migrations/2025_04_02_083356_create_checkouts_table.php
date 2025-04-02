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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id('orderid');
            $table->string('naam');
            $table->time('tussenvoegselnaam')->nullable();
            $table->time('achternaam');
            $table->string('straat');
            $table->string('huisnummer');
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('telefoonnummer');
            $table->string('email');
            $table->string('land');
            $table->string('betaalmethode');
            $table->time('tussenvoegseladress')->nullable();
            $table->string('facatuursadress1');
            $table->string('facatuursadress2')->nullable();
            $table->timestamps(); // Voegt created_at en updated_at toe
        });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};
