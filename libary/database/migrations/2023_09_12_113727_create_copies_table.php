<?php

use App\Models\Copy;
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
        Schema::create('copies', function (Blueprint $table) {
            //0-puha,1-keney kotesu
            $table->boolean('hardcovered')->default(0);
            //0-konyvt,1f-nal,2-selejt
            $table-> integer('status')->default(0);
            $table->year('publication') ;
            $table->foreignId('book_id')->references('book_id')->on('books');
            $table->timestamps();
        });
        Copy::create(['publication' => 2001, 'book_id' => 1]);
        Copy::create(['publication' => 2005, 'book_id' => 2]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
