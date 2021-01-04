<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense__records', function (Blueprint $table) {
            $table->id();
            $table-> integer('amount');
            $table-> text('note');

            $table-> unsignedBigInteger('user_id');
            $table-> foreign('user_id')-> references('id')-> on('users')-> onDelete('cascade');

            $table-> unsignedBigInteger('expense_category_id');
            $table-> foreign('expense_category_id')-> references('id')-> on('expense__categories')-> onDelete('cascade');


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
        Schema::dropIfExists('expense__records');
    }
}
