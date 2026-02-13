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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'question_count')) {
                $table->unsignedInteger('question_count')->default(0);
            }
            if (!Schema::hasColumn('users', 'is_paid')) {
                $table->boolean('is_paid')->default(false);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'question_count')) {
                $table->dropColumn('question_count');
            }
            if (Schema::hasColumn('users', 'is_paid')) {
                $table->dropColumn('is_paid');
            }
        });
    }
};