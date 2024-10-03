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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // ชื่ออุปกรณ์
            $table->unsignedBigInteger('category_id'); // อ้างอิงไปยังตารางหมวดหมู่
            $table->decimal('price', 10, 2); // ราคาอุปกรณ์
            $table->timestamps();

            // ตั้งค่า Foreign Key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
