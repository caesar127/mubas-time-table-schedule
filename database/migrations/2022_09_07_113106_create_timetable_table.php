<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetable', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('semester');
            $table->string('faculty');
            $table->string('class');
            $table->date('date');
            $table->time('time');
            $table->string('hours');
            $table->string('students');
            $table->string('room');
            $table->string('module');
            $table->index('faculty');
            $table->index('class');
            $table->index('room');
            $table->index('module');
            $table->foreign('faculty')->references('faculty_code')->on('faculty')->onDelete('cascade');
            $table->foreign('class')->references('class_code')->on('classes')->onDelete('cascade');
            $table->foreign('room')->references('room_code')->on('room')->onDelete('cascade');
            $table->foreign('module')->references('module_code')->on('module')->onDelete('cascade');
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
        Schema::dropIfExists('timetable');
    }
};
