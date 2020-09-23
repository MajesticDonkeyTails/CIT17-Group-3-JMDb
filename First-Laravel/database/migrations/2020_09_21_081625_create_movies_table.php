<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            
            $table->string('title', 255);
            $table->date('release_date');
            $table->integer('runtime')->nullable();
            $table->text('plot')->nullable();
            $table->string('age_rating', 255);
            
            $table->integer('genre_id');
            $table->integer('country_id');
            $table->integer('language_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
