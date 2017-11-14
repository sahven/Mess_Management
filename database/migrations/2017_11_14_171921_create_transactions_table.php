<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE Transactions(
                    CatererID int NOT NULL,
                    UserID int NOT NULL,
                    Time datetime NOT NULL,
                    PlanID int NULL,
                    Price real NULL,
                    FOREIGN KEY (CatererID) REFERENCES Caterer(CatererID)
                    ON DELETE CASCADE
                    ON UPDATE CASCADE,
                    FOREIGN KEY (UserID) REFERENCES Diner(UserID)
                    ON DELETE CASCADE
                    ON UPDATE CASCADE,
                    PRIMARY KEY (CatererID, Time, UserID)
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
        Schema::dropIfExists('transactions');
    }
}
