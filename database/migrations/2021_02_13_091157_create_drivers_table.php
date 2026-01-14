<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('First_Name')->nullable();
            $table->string('Middle_Name')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('Civil_Status')->nullable();
            $table->string('Date_Of_Birth')->nullable();
            $table->string('Height_Cm')->nullable();
            $table->string('Weight_Ibs')->nullable();
            $table->string('Address')->nullable();
            $table->string('Apt_Suite_Other')->nullable();
            $table->string('Driver_Image')->nullable();
            $table->string('City')->nullable();
            $table->string('State')->nullable();
            $table->string('Zip_Code')->nullable();
            $table->string('Documents')->nullable();
            $table->string('Phone_Number')->nullable();
            $table->string('Secondary_Phone_No')->nullable();
            $table->string('License_Image')->nullable();
            $table->string('Email_Address')->nullable();
            $table->string('Password')->nullable();
            $table->string('Region')->nullable();
            $table->string('Driving_License')->nullable();
            $table->string('Dln_State')->nullable();
            $table->string('Issue_Date')->nullable();
            $table->string('Expiration_Date')->nullable();
            $table->string('Chauffeur_Number')->nullable();
            $table->string('Employee_ID')->nullable();
            $table->string('Join_Date')->nullable();
            $table->string('Social_Security_Number')->nullable();
            $table->string('Run_ID')->nullable();
            $table->integer('Driver_Type')->nullable();
            $table->string('Department')->nullable();
            $table->integer('Assign_Vehicle')->nullable();
            $table->string('Performance_type')->nullable();
            $table->string('Remarks')->nullable();
            $table->integer('Flexable_Hrs')->nullable();
            $table->string('Flexible_Side')->nullable();
            $table->string('Flexible_Hours')->nullable();
            $table->integer('Special_Hrs_1')->nullable();
            $table->string('Speacial_Day')->nullable();
            $table->string('Special_Time_Start')->nullable();
            $table->string('Special_Time_End')->nullable();
            $table->integer('Available_All_Time')->nullable();
            $table->integer('Pace_Program')->nullable();
            $table->integer('inActive')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
