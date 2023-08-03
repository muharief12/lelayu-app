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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('rip_name');
            $table->integer('rip_age');
            $table->date('rip_date');
            $table->time('rip_time');
            $table->string('rip_place');
            $table->string('burial_date');
            $table->time('burial_time');
            $table->string('burial_place');
            $table->string('burial_start_from');
            $table->string('abandoned_family');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
