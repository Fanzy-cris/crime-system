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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Type_id')->constrained()->onDelete('cascade');
            $table->foreignId('police_station_id')->constrained()->onDelete('cascade');
            $table->string('nameUser');
            $table->string('surNameUser');
            $table->integer('badgeNumUser');
            $table->integer('phoneUser');
            $table->string('emailUser')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('passwordUser');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
