<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading')->nullable();
            $table->text('description');
            $table->string('image_path');
            $table->integer('workshop_id')->unsigned();
            $table->timestamps();

            $table->foreign('workshop_id')
                    ->references('id')
                    ->on('workshops')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop_articles');
    }
}
