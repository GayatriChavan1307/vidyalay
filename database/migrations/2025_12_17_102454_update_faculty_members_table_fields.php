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
            // Rename existing columns to match desired fields
            $table->renameColumn('title', 'name');
            $table->renameColumn('description', 'designation'); // Wait — NO, see note below

            // Better: Add new columns first if data mapping is different
            // Assuming current 'title' -> new 'name'
            // Current 'description' -> keep as 'description' (bio), or map to 'designation' if that's the intent

            // Recommended realistic approach:
            $table->renameColumn('title', 'name'); // Name = former title

            // Add missing columns (assuming they don't exist yet)
            $table->string('designation')->nullable()->after('name');
            $table->string('subject')->nullable()->after('designation'); // Standard
            $table->string('qualification')->nullable()->after('subject'); // Education
            $table->string('image')->nullable()->after('qualification');
            // 'order' and 'is_active' likely already exist
            // Keep 'description' as text for full bio
            $table->text('description')->nullable()->change(); // Ensure it's text if needed

            // If icon is not needed, drop it later in another migration
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faculty_members', function (Blueprint $table) {
            $table->renameColumn('name', 'title');
            // Reverse adds: drop new columns
            $table->dropColumn(['designation', 'subject', 'qualification', 'image']);
            // etc.
        });
    }
};
