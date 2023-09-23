<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ellink_ellist', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ellink_id')->nullable();
            $table->unsignedBigInteger('ellist_id')->nullable();
            $table->foreign('ellink_id')->references('id')->on('ellinks')->nullOnDelete();
            $table->foreign('ellist_id')->references('id')->on('ellists')->nullOnDelete();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ellink_ellist');
    }
};
