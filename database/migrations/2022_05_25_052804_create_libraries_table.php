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
        Schema::create('libraries', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id')->primary();
            $table->string('book_name');
            $table->string('author');
            $table->string('email');
            $table->string('publisher_name');
            $table->date('issue_date');
            $table->longText('description');
            $table->string('phone_number');
            $table->integer('price');
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
        Schema::dropIfExists('libraries');
    }
};
