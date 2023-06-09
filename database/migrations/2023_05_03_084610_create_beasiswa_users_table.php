<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeasiswaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beasiswa_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nrp')->unique();
            $table->longText('name');
            $table->longText('departement_name');
            $table->longText('major_name');
            $table->string('phone');
            $table->longText('father_job');
            $table->string('father_salary');
            $table->longText('mother_job');
            $table->string('mother_salary');
            $table->string('parents_salary_pic')->nullable();
            // $table->string('mother_salary_pic')->nullable();
            $table->string('motivation_letter');
            $table->string('achievement');
            $table->unsignedBigInteger('beasiswa_id');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('beasiswa_users');
    }
}
