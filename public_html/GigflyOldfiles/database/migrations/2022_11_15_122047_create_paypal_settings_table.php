<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypal_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->default('PayPal');
            $table->boolean('is_enabled')->default(false);
            $table->unsignedBigInteger('logo_id')->nullable();
            $table->decimal('exchange_rate')->default(1);
            $table->integer('deposit_fee')->default(0);

            $table->foreign('logo_id')->references('id')->on('file_manager')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paypal_settings');
    }
};
