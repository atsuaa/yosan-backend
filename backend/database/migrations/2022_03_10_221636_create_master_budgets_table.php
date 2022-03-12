<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_budgets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('group_id');
            $table->integer('tag_id')->nullable();
            $table->string('name', 50);
            $table->string('description', 100)->nullable();
            $table->integer('color_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_budgets');
    }
}
