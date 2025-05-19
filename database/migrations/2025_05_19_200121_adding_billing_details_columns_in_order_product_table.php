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
        Schema::table('order_product', function (Blueprint $table) {
            $table->string('full_name', 255)->after('total_price');
            $table->text('address')->after('full_name');
            $table->integer('zip_code')->after('address');
            $table->string('city')->after('zip_code');
            $table->string('country')->after('city');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product', function (Blueprint $table) {
            $table->dropColumn('full_name', 255);
            $table->dropColumn('address');
            $table->dropColumn('zip_code');
            $table->dropColumn('city');
            $table->dropColumn('country');
        });
    }
};
