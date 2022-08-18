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
            $table->id('code');
            $table->string('department');
            $table->string('modules');
            $table->index('department');
            $table->foreign('department')->references('department_code')->on('department')->onDelete('cascade');
            $table->index('modules');
            $table->foreign('modules')->references('module_code')->on('module')->onDelete('cascade');
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
