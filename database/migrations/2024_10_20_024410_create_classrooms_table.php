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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id('id_lop_hoc'); // Khóa chính
            $table->string('ten_lop_hoc', 50);
            $table->foreignId('id_gv') // Khóa ngoại
                ->constrained('teachers', 'id_gv') // Chỉ rõ tên cột trong bảng teachers
                ->onDelete('cascade'); // Xóa lớp học nếu giáo viên bị xóa
            $table->string('ten_mon_hoc', 50);
            $table->string('khoa', 50);
            $table->timestamps(); // created_at và updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
