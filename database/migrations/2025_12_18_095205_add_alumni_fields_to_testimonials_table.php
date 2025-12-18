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
       Schema::table('testimonials', function (Blueprint $table) {
            $table->string('email')->unique()->nullable()->after('name');
            $table->string('whatsapp', 15)->nullable()->after('email');
            $table->year('passing_year')->nullable()->after('whatsapp');
            $table->enum('category', ['SSC', 'HSC', 'HSC-Commerce'])->nullable()->after('passing_year');
            $table->string('location')->nullable()->after('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn(['email', 'whatsapp', 'passing_year', 'category', 'location']);
        });
    }
};
