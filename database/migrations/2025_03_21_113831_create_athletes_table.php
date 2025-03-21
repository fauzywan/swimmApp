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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('nik', 16)->unique();
            $table->string('photo');
            $table->date('dob');
            $table->string('phone');
            $table->string('email')->unique();
            $table->foreignId('nation_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('school_id')->constrained();
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athletes');
    }
};
