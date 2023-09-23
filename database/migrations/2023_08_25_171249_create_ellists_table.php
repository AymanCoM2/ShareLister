<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ellists', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->default('type1');
            //'type1'=Normal List // 'type2'=Black List //'type3'=Social List //'type4'=CTA List
            $table->boolean('isPublic')->default(true);
            $table->string('listLink')->nullable(); //For Copying and Sharing List
            $table->integer('views')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ellists');
    }
};
