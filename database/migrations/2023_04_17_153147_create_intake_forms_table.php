<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->unsignedBigInteger('drop_in_staff_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('taken_staff_id')->nullable();
            $table->unsignedBigInteger('fixer_id')->nullable();
            $table->unsignedTinyInteger('fixed_type_id')->nullable();
            $table->string('sjt_id', 100)->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_phone_number')->nullable();
            $table->string('client_location')->nullable();
            $table->string('item_code');
            $table->dateTime('intake_date');
            $table->dateTime('fixed_date')->nullable();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
            $table->unsignedBigInteger('deleted_by_id')->nullable();


            $table->foreign('item_id')
                ->references('id')
                ->on('items');
            $table->foreign('drop_in_staff_id')
                ->references('id')
                ->on('users');
            $table->foreign('client_id')
                ->references('id')
                ->on('users');
            $table->foreign('taken_staff_id')
                ->references('id')
                ->on('users');
            $table->foreign('fixer_id')
                ->references('id')
                ->on('users');
            $table->foreign('deleted_by_id')
                ->references('id')
                ->on('users');
            $table->foreign('fixed_type_id')
                ->references('id')
                ->on('fixed_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intake_forms');
    }
}
