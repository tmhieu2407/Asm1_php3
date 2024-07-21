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
        Schema::create('tin', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->text('tomtat');
            $table->unsignedInteger('luotxem')->default(0);
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('loaitin_id')->constrained('loaitin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin');
    }
};
