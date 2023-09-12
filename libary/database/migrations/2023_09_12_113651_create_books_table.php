<?php

use App\Models\Book;
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
            $table->id('book_id');
            $table->string('author',32);
            $table->string('title',150);
            $table->integer('pieces')->default(50);
            $table->timestamps();
        });
        Book::create(['book_id' => 1, 'author' => 'Colin Hoover', 'title' => 'It start with us', 'pieces'=> 20]);
        Book::create(['book_id' => 2, 'author' => 'Monica Murphy', 'title' => 'Million kisses in your lifetime', 'pieces'=> 22]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
