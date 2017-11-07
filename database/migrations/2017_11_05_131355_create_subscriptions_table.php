<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        DB::statement("
            create table Subscribes (
                PlanID int,
                UserID int,
                CatererID int,
                SubscribedOn date,
                foreign key (PlanID) references Plan(PlanID)
                    on delete cascade
                    on update cascade,
                foreign key (CatererID) references Caterer(CatererID)
                    on delete cascade
                    on update cascade,
                foreign key (UserID) references Diner(UserID)
                    on delete cascade
                    on update cascade,
                primary key (UserID, CatererID)
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
        Schema::dropIfExists('subscriptions');
    }
}
