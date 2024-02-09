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
        Schema::create('group_data', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('group')->onDelete('cascade')->onUpdate('cascade');
            $table->string('team_name');
            $table->string('fullname');
            $table->string('birth');
            $table->string('line_id');
            $table->string('phone_no');
            $table->string('competition_type');
            $table->string('cv_file')->default('');
            $table->string('payment_file')->default('');
            $table->string('regist_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_data');
    }
};
