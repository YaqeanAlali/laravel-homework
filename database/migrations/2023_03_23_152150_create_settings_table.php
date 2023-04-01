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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("logo");
            $table->string("city");
            $table->string("favicon");
            $table->string("address");
            $table->string("phone");
            $table->string("work_hours");
            $table->string("email");
            $table->string("fb");
            $table->string("twitter");
            $table->string("insta");
            $table->text("map");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
