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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('id_gv');
            $table->string('ho_va_ten',50);
            $table->string('so_dien_thoai',50);
            $table->string('email',50);
            $table->string('ten_dang_nhap',50);
            $table->string('mat_khau',50);
            $table->string('hinh_anh',50);
            $table->string('khoa',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
