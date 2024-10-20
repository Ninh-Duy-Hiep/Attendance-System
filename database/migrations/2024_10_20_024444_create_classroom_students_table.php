<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classroom_students', function (Blueprint $table) {
            $table->foreignId('id_lop_hoc')->constrained('classrooms','id_lop_hoc')->onDelete('cascade'); // Khóa ngoại đến bảng classrooms
            $table->foreignId('id_sv')->constrained('students','id_sv')->onDelete('cascade'); // Khóa ngoại đến bảng students
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_students');
    }
};
