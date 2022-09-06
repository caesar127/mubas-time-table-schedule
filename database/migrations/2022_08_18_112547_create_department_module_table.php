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
        Schema::create('department_module', function (Blueprint $table) {
            $table->string('code');
            $table->string('department');
            $table->integer('year');
            $table->string('semester');
            $table->string('module');
            $table->index('department');
            $table->index('module');
            $table->foreign('department')->references('code')->on('department')->onDelete('cascade');
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
        Schema::dropIfExists('department_module');
    }
};
