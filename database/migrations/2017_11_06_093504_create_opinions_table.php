<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            create table Opinions (
                Description text,
              Rating int,
              UserID int,
              ProductID int,
              CatererID int,
              foreign key (CatererID) references Caterer(CatererID)
                    on delete cascade
                on update cascade,
                foreign key (UserID) references Diner(UserID)
                    on delete cascade
                on update cascade,
                foreign key (ProductID) references Product(ProductID)
                    on delete cascade
                    on update cascade,
                primary key (ProductID, CatererID, UserID)
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
        Schema::dropIfExists('opinions');
    }
}
