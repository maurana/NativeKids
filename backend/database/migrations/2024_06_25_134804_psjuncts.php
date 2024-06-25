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
        Schema::create('psjuncts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pictures_id')->unsigned();
            $table->foreign('pictures_id')
                ->references('id')
                ->on('pictures')
                ->onDelete('restrict');
            $table->bigInteger('sounds_id')->unsigned();
            $table->foreign('sounds_id')
                ->references('id')
                ->on('sounds')
                ->onDelete('restrict');
            $table->bigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('psjuncts');
    }
};
