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
            // Schema::table('products', function (Blueprint $table) {
            //     $table->after('price',function(Blueprint $table){
            //         $table->enum('size',['S','M','L'])->default('S');
            //     });
            // });

            $table->after('password',function (Blueprint $table){
               $table->string('city',15);
               $table->string('phone',15);
               $table->date('date_of_birth');
               $table->text('image');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users', function (Blueprint $table) {
            $table->dropColumn(['password','city','phone','date_of_birth','image']);
        });
    }
};
