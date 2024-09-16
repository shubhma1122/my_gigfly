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
        Schema::table('settings_auth', function (Blueprint $table) {
            $table->unsignedBigInteger('default_buyer_level_id')->nullable()->after('auth_img_id');

            $table->foreign('default_buyer_level_id')->references('id')->on('levels')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings_auth', function (Blueprint $table) {
            $table->dropColumn('default_buyer_level_id');
        });
    }
};
