<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('introduction');
            $table->string('image');
            $table->text('prerequisites');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('level');
            $table->string('youtube_id');
            $table->boolean('online')->nullable()->default(false);
            $table->integer('view_count')->default(0);
            // $table->unsignedBigInteger('category_id')->nullable();
            $table->foreignId('author_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
