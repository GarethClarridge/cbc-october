<?php namespace CBC\Sermons\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSermonsTable extends Migration
{

    public function up()
    {
        Schema::create('cbc_sermons_sermons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cbc_sermons_sermons');
    }

}
