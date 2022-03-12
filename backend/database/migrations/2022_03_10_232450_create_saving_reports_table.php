<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saving_reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('budget_group_id');
            $table->integer('master_budget_id');
            $table->integer('budget_id');
            $table->integer('budget_price');
            $table->integer('spending_price');
            $table->integer('saving_price');
            $table->date('from_date');
            $table->date('to_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saving_reports');
    }
}
