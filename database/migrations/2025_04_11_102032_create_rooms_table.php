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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->boolean('is_enabled')->default(true);
            $table->string('title');
            $table->string('short_desc');
            $table->longText('full_desc');
            $table->boolean('p_bathroom');
            $table->boolean('p_kitchen');
            $table->boolean('p_laundry');
            $table->integer('price')->money_format(000,000.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
