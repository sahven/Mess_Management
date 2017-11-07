<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            create table  Timing (
              TimingID int NOT NULL AUTO_INCREMENT,
              Day varchar(10) NOT NULL,
              StartTime time NOT NULL,
              EndTime time NOT NULL,
              primary key (TimingID)
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
        Schema::dropIfExists('timings');
    }
}
