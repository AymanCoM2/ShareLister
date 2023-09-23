<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
     * Category
     * Reviews  ?
     * Social Links ? If a Website ?
     * Some Data From other APIS ?
     * Data About Its position and Other lists ?
     *  -- Mentioned in Black list Or white list
     *
     * Trustworthiness
     *
     * Event-related:Like Lottery ?
     * Tags or Keywords: // ! important
     * Thumbnail Or FavIcon
     */
    public function up(): void
    {
        Schema::create('ellinks', function (Blueprint $table) {
            $table->id();
            $table->string('url'); // It will be Required
            $table->string('description')->nullable();
            $table->string('health')->nullable(); //Up Or Down
            // nullOnDelete Instead Of Deletion ????
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ellinks');
    }
};
