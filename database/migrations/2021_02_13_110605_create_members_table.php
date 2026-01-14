<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('city')->nullable();
            $table->string('apt_no')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('home_num')->nullable();
            $table->string('cell_num')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('phone_num')->nullable();
            $table->date('dob')->nullable();
            $table->string('email_address')->nullable();
            $table->string('driver_license_num')->nullable();
            $table->date('driver_issue_date')->nullable();
            $table->date('driver_expiration_date')->nullable();
            $table->string('chauffeur_license_num')->nullable();
            $table->date('chauffeur_issue_date')->nullable();
            $table->date('chauffeur_expiration_date')->nullable();
            $table->string('ssn')->nullable();
            $table->string('us_citizen')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('hours_phone_number')->nullable();
            $table->integer('md_id')->nullable();
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
        Schema::dropIfExists('members');
    }
}
