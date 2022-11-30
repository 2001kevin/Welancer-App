<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id('work_id');
            $table->unsignedBigInteger('freelance_id');
            $table->foreign('freelance_id')
                    ->references('freelance_id')
                    ->on('freelances')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('project_name');
            $table->string('project_description');
            $table->string('client_name');
            $table->string('client_review');
            $table->string('photo');
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
        Schema::dropIfExists('works');
    }
}
