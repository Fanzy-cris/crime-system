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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('police_station_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->string('objectComplaints');
            $table->string('contentComplaints');
            $table->string('nameUserComplaints');
            $table->string('userEmailComplaints');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('userNumComplaints');
            $table->string('state');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
