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
        Schema::create('web_services', function (Blueprint $table) {
            $table->id();
            $table->string('lineup', 40);
            $table->string('description');
            $table->integer('price');
            $table->string('price_mark');
            $table->string('file_path');
            $table->string('file_hash')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_services');
    }
};
