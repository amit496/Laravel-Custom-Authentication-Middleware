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
        Schema::create('password_update_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->nullable();
            $table->date('password_update_date')->nullable();
            $table->string('last_password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_update_histories');
    }
};
