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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->string('gender');
            $table->string('marital_status');
            $table->integer('contact_no')->unique();
            $table->string('street');
            $table->string('barangay');
            $table->string('city');
            $table->string('province');
            $table->date('date_hire');
            $table->string('employment_status');
            $table->string('isActive');
            $table->string('Job_Title');
            $table->date('isResigned');
            $table->string('rank');
            $table->string('department');
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('employees');
    }
};
