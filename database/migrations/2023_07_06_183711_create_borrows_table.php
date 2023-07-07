<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->string('client_id', 255)->nullable();
            $table->string('name', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('type_of_tool', 255)->nullable();
            $table->string('model_number', 255)->nullable();
            $table->text('accessories')->nullable();
            $table->text('comment')->nullable();
            $table->dateTime('date_borrowed')->nullable();
            $table->string('borrow_staff_name')->nullable();
            $table->dateTime('expected_return_date')->nullable();
            $table->dateTime('date_returned')->nullable();
            $table->text('return_staff_name')->nullable();
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
        Schema::dropIfExists('borrows');
    }
}
