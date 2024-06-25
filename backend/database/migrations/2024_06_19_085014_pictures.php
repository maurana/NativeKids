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
        Schema::create('pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->string('name')->unique();
            $table->string('file')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pictures');
    }
};
