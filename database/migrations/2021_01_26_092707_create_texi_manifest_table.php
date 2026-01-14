<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTexiManifestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texi_manifest', function (Blueprint $table) {
            $table->id();
            $table->text('Date_Of_Service')->nullable($value = true);
            $table->text('Run_Number')->nullable($value = true);
            $table->integer('Booking_ID');
            $table->text('Client_Name')->nullable($value = true);
            $table->text('Space_On')->nullable($value = true);
            $table->text('Origin_Street')->nullable($value = true);
            $table->text('Origin_Comment')->nullable($value = true);
            $table->text('Orig_Apt')->nullable($value = true);
            $table->text('Origin_City')->nullable($value = true);
            $table->text('Origin_Phone')->nullable($value = true);
            $table->float('Origin_Lon')->nullable($value = true);
            $table->float('Origin_Lat')->nullable($value = true);
            $table->text('Space_Off')->nullable($value = true);
            $table->text('Dest_Street')->nullable($value = true);
            $table->text('Dest_Comment')->nullable($value = true);
            $table->text('Dest_Apt')->nullable($value = true);
            $table->text('Dest_City')->nullable($value = true);
            $table->text('Dest_Phone')->nullable($value = true);
            $table->float('Dest_Lon')->nullable($value = true);
            $table->float('Dest_Lat')->nullable($value = true);
            $table->text('Schedule_Time')->nullable($value = true);
            $table->text('Neg_Time')->nullable($value = true);
            $table->text('Appt_Time')->nullable($value = true);
            $table->text('Origin_Actual_Arrive')->nullable($value = true);
            $table->text('Origin_Actual_Depart')->nullable($value = true);
            $table->text('Dest_Actual_Arrive')->nullable($value = true);
            $table->text('Dest_Actual_Depart')->nullable($value = true);
            $table->double('Trip_Distance')->nullable($value = true);
            $table->double('Fare')->nullable($value = true);
            $table->double('Fare_Collected')->nullable($value = true);
            $table->double('Provider_Cost')->nullable($value = true);
            $table->double('Adjusted_Cost')->nullable($value = true);
            $table->text('Comments')->nullable($value = true);

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
        Schema::dropIfExists('texi_manifest');
    }
}
