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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn_number');
            $table->string('title');
            $table->foreignId('type')->constrained(\App\Models\Type::class);
            $table->string('author');
            $table->integer('quantity');
            $table->date('purchased_at');
            $table->string('edition');
            $table->decimal('price');
            $table->integer('pages');
            $table->string('publisher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
