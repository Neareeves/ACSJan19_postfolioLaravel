<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //         Schema::create('projets', function(Blueprint $table) {
    //   $table->increments('id');
    //   $table->timestamps();
    //   $table->string('titre');
    //   $table->text('principe');
    //   $table->text('tech');
    //   $table->text('description');
    //   $table->text('details');
    //   $table->text('cahiercharges');
    //   $table->text('illus');
    //   $table->text('altimg');
    //   $table->text('link');
    //   $table->text('github');
    // });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
