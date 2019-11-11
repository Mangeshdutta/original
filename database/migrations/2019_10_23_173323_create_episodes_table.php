<?php

use App\Enums\EpisodeType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('show_id');
            $table->string('title');
            $table->string('slug');
            $table->string('artwork')->nullable();
            $table->text('summary')->nullable();
            $table->text('episode_notes')->nullable();
            $table->integer('episode_number')->nullable()->index();
            $table->integer('season_number')->nullable()->index();
            $table->tinyInteger('episode_type')->default(EpisodeType::Full);
            $table->string('keywords');
            $table->boolean('explicit_content')->default(false);

            $table->string('file_name');
            $table->string('content_type');
            $table->unsignedBigInteger('file_size');
            $table->time('duration');
            $table->integer('downloads_count')->default(0);

            $table->timestamp('published_at');
            $table->timestamps();

            $table->foreign('show_id')->references('id')->on('shows');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
