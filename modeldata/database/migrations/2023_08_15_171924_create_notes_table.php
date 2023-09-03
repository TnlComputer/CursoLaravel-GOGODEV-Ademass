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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 255)->nullable();
            $table->date('deadline');
            $table->boolean('done')->default(false);
            $table->timestamps();
        });
    }

    // $table->integer('example');
    // $table->unsignedInteger('example');
    // $table->bigIncrements ('example');
    // $table->unsignedBigInteger('example');
    // $table->text('example');
    // $table->float('example');
    // $table->double('example');
    // $table->enum('state', ['DRAFT', 'PUBLISHED', 'DELETED']);
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
