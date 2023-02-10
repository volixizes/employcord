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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->('image_type', ['Police Clearance'], ['NBI Clearnce'], 'Barangay Clearnce');
            $table->string('image_type');
            $table->string('image_path');
            $table->date('expiration');
            // $table->enum('status', ['Current', 'Processing', 'Expired'])->default('Current');
            // $table->string('status')->default('Current');

            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
};
