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
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('players_id')->unsigned();
            $table->foreign('players_id')
                ->references('id')
                ->on('players')
                ->onDelete('restrict');
            $table->bigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict');
            $table->integer('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('results');
    }
};
