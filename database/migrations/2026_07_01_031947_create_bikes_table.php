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
    Schema::create('bikes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->string('battery');
        $table->integer('range_km');
        $table->decimal('price_per_day', 8, 2);
        $table->string('image')->nullable();
        $table->string('status')->default('available');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('bikes');
}
};
