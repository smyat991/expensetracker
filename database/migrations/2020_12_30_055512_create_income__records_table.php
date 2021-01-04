<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income__records', function (Blueprint $table) {
            $table->id();
            $table-> integer('amount');
            $table-> text('note');

            $table-> unsignedBigInteger('user_id');
            $table->foreign('user_id')-> references('id')-> on('users')-> onDelete('cascade');

            $table-> unsignedBigInteger('income_category_id');
            $table->foreign('income_category_id')->references('id')->on('income__categories')-> onDelete('cascade');

            

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
        Schema::dropIfExists('income__records');
    }
}
