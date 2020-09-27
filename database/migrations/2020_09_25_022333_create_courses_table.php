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
            $table->string('name');
            $table->string('description',10000);
            $table->string('image')->nullable();
            $table->string('apply_process',1000)->nullable();
            $table->string('certification',1000)->nullable();
            $table->date('start_date')->nullable();
            $table->date('deadline')->nullable();

            $table->string('duration')->nullable();
            $table->string('class_duration')->nullable();
            $table->string('seats')->nullable();
            $table->string('fee')->nullable();
            $table->string('skill_level')->nullable();

            $table->boolean('status')->default(true);
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
