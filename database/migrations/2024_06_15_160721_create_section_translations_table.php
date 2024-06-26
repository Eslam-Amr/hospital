<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('section_translations', function (Blueprint $table) {
       // mandatory fields
       $table->id();
       $table->string('locale')->index();

            // Foreign key to the main model
            // $table->unsignedBigInteger('section_id');
            $table->unique(['section_id', 'locale']);
            $table->foreignId('section_id')->references('id')->on('sections')->onDelete('cascade');


       // Actual fields you want to translate
       $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_translations');
    }
};
