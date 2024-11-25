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
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('position'); // Remove old 'position' column
            $table->unsignedBigInteger('position_id')->nullable(); // Add new foreign key 'position_id'
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('set null'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('position'); // Restore 'position' column
            $table->dropForeign(['position_id']); // Remove foreign key
            $table->dropColumn('position_id'); // Remove 'position_id'
        });
    }
};
