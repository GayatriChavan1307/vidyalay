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
        $table->enum('category', ['primary', 'upper-primary', 'junior-college'])
              ->nullable()
              ->after('is_active');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faculty_members', function (Blueprint $table) {
        $table->dropColumn('category');
    });
    }
};
