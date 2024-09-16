<?php

use Illuminate\Support\Facades\DB;
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
        Schema::table('settings_commission', function (Blueprint $table) {
            DB::statement("ALTER TABLE settings_commission MODIFY commission_from ENUM('orders', 'withdrawals', 'both') NOT NULL");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings_commission', function (Blueprint $table) {
            DB::statement("ALTER TABLE settings_commission MODIFY commission_from ENUM('orders', 'withdrawals') NOT NULL");
        });
    }
};
