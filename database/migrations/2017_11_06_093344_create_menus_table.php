<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            create table Menu (
              TimingID int,
              CatererID int,
              ProductID int,
              foreign key  (TimingID) references Timing(TimingID)
                on delete cascade
                on update cascade,
              foreign key  (CatererID) references Caterer(CatererID)
                on delete cascade
                on update cascade,
              foreign key (ProductID) references Product(ProductID)
                on delete cascade
                on update cascade,
              primary key (ProductID, CatererID, TimingID)
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
        Schema::dropIfExists('menus');
    }
}
