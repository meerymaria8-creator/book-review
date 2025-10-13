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
        Schema::create('book', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('description');
            // relation of user
            $table->uuid('user_id');
            $table->forgin('user_id')->referances('id')->no('users')->onDelete('cascade');
            $table->timestamps();
            });
    }


    /**
     * Reverse the migrations.
     */
    //to roll back the db
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
