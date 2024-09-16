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
        Schema::table('automatic_payment_gateways', function (Blueprint $table) {
            $table->double('deposit_max_amount', 15, 2)->default(100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('automatic_payment_gateways', function (Blueprint $table) {
            //
        });
    }
};
