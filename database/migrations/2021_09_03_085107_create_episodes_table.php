<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('episodes')) return;       //add this line to migration file

        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('content');
            $table->string('youtube_id');
            $table->string('Video_path');
            $table->string('slug')->unique();
            $table->integer('duration');
            $table->boolean('premium');
            $table->text('ressource');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');

            $table->timestamp('published_at')->nullable();

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
        Schema::dropIfExists('episodes');
    }
}
