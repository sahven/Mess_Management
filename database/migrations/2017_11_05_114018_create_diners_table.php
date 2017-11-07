<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDinersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("
            create table Diner(
              FirstName varchar(20) NOT NULL,
              LastName varchar(20),
              UserID int NOT NULL auto_increment,
              RollNo int NOT NULL,
              EmailID varchar(32) NOT NULL,
              PhoneNo int NOT NULL,
              DOB date,
              YearOfStudy int ,
              Course varchar(20) NOT NULL,
              CardDetails varchar(50) unique,
              primary key (UserID)
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
        Schema::dropIfExists('diners');
    }
}
