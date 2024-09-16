<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('settings_media', function (Blueprint $table) {
            $table->boolean('enable_audio_upload')->after('default_storage_driver')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings_media', function (Blueprint $table) {
            $table->dropColumn('enable_audio_upload');
        });
    }
};
