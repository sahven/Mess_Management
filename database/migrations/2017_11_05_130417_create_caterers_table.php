<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaterersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::statement("
            create table Caterer (
              CatererID int NOT NULL AUTO_INCREMENT,
              CatererName varchar(32) NOT NULL,
              EmailID varchar(30) NOT NULL Unique,
              primary key (CatererID)
            )
            ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caterers');
    }
}
