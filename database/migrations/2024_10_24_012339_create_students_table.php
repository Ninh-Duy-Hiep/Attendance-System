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
        Schema::create('students', function (Blueprint $table) {
            $table->id('stt');
            $table->string('student_id')->unique();
            $table->string('fullname', 50);
            $table->string('phonenumber', 15);
            $table->string('email', 50);
            $table->string('department', 50);
            $table->string('image')->nullable(true);
            $table->string('year', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
