<?php

use App\Enums\ShowType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->tinyInteger('show_type')->default(ShowType::Episodic);
            $table->boolean('explicit_content')->default(false);
            $table->string('tags')->nullable();

            $table->string('author');
            $table->string('owner');
            $table->string('owner_email');
            $table->string('copyright')->nullable();
            $table->string('website')->nullable();

            $table->text('donation_message')->nullable();
            $table->string('donation_link')->nullable();

            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('time_zone_id');

            $table->string('artwork')->nullable();

            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('time_zone_id')->references('id')->on('time_zones');

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
        Schema::dropIfExists('shows');
    }
}
