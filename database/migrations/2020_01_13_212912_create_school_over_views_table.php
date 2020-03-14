<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolOverViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_over_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('school_id');
            $table->string('first_language');
            $table->string('second_language');
            $table->float('pass_rate', 0, 100);
            $table->string('level');
            $table->bigInteger('emis_no');
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
        Schema::dropIfExists('school_over_views');
    }
}
