<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_prices', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('vehicle_type_id')->index();
            $table->date('starting_date');
            $table->date('ending_date');
            $table->float('price');
            $table->unsignedInteger('contract_id')->index('fk_contracts_1_idx');
            $table->unsignedInteger('corporate_id')->index('fk_corporates_2_idx');
            $table->softDeletes();
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
        Schema::dropIfExists('contract_prices');
    }
}
