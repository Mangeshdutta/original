<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeningServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listening_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('show_id');
            $table->string('key');
            $table->string('value');
            $table->timestamps();

            $table->foreign('show_id')
                ->references('id')
                ->on('shows')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unique(['show_id', 'key']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listening_services');
    }
}
