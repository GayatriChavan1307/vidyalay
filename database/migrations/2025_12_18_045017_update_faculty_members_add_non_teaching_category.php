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
       Schema::table('faculty_members', function (Blueprint $table) {
        // Change enum to include new values
        $table->enum('category', ['primary', 'upper-primary', 'junior-college', 'principal', 'non-teaching'])
              ->nullable()
              ->change();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faculty_members', function (Blueprint $table) {
        $table->enum('category', ['primary', 'upper-primary', 'junior-college'])
              ->nullable()
              ->change();
    });
    }
};
