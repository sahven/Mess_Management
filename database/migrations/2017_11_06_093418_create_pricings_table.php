<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            create table Pricing (
                CatererID int,
                PlanID int,
                TimingID int,
                Price real,
                foreign key (CatererID) references Caterer(CatererID)
                    on delete cascade
                    on update cascade,
                foreign key (PlanID) references Plan(PlanID)
                    on delete cascade
                    on update cascade,
                foreign key (TimingID) references Timing(TimingID)
                    on delete cascade
                    on update cascade,
                primary key (CatererID, PlanID, TimingID)
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
        Schema::dropIfExists('pricings');
    }
}
