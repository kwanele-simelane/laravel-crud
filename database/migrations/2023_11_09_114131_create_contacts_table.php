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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->constrained()->onDelete('cascade');
            $table->string('product');
            $table->string('loan_amount');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('national_id');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('employer');
            $table->string('employer_contact');
            $table->string('designation');
            $table->string('income_amount');
            $table->longText('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
