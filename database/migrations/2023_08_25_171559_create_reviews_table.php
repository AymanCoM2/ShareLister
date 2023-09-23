<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /**
         * content
         * Rating > 0,1,2,3,4,5,Love
         * FK for the User Of Course
         */
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            // $table->unsignedBigInteger('user_id'); // Foreign key to link the review to a user
            $table->text('content')->nullable(); // Content of the review
            $table->integer('rating')->default(1); // Rating given in the review
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('ellink_id')->nullable();
            $table->foreign('ellink_id')->references('id')->on('ellinks')->onDelete('cascade');
            $table->timestamps(); // Created at and updated at timestamps
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
