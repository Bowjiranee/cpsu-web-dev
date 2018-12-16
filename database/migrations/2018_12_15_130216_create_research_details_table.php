<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('info');
            $table->integer('publication');
            $table->timestamps();
        });

        Schema::create('research_user', function (Blueprint $table){
            $table->increments('id');
            $table->integer('research_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_details');
        Schema::dropIfExists('research_user');
    }
}
