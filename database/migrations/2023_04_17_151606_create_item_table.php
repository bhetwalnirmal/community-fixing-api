<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('item_type_id')->nullable();
            $table->string('name');
            $table->string('brand')->nullable();
            $table->string('accessories')->nullable();
            $table->string('description');
            $table->string('problem');
            $table->string('last_working_description');
            $table->double('weight');
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();

            $table->foreign('item_type_id')
                ->references('id')
                ->on('item_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
