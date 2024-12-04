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
        Schema::create('get_in_touch_trinhvantrungnghia', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('contact_name'); 
            $table->string('contact_email'); 
            $table->string('contact_country'); 
            $table->string('contact_company'); 
            $table->string('contact_support'); // Support type selected
            $table->text('contact_details'); // Textarea for project details
            $table->timestamps(); // Created_at and Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('get_in_touch_trinhvantrungnghia');
    }
};
