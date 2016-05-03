<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tableMeta', function($table){
           $table->increments('id');
           $table->string('table_name');
           $table->json('validation');
           $table->json('relations');
           $table->json('schema');
           $table->integer('count');
           $table->boolean('access');
           $table->integer('service_id')->unsigned();   
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
        //
        Schema::drop('tableMeta');
    }
}
