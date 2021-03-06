<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
						$table->unsignedBigInteger('user_id');
						$table->unsignedBigInteger('merchandise_id');
						// $table->foreign('merchandise_id')->references('id')->on('merchandises')->onDelete('cascade');
						$table->enum('status', ['success', 'pending', 'fail'])->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
