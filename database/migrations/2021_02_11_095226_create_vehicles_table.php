<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->text('Vehicle_Maker')->nullable($value = true);
            $table->text('Vehicle_Engine_Type')->nullable($value = true);
            $table->text('Vehicle_Model')->nullable($value = true);
            $table->integer('Vehicle_Type')->nullable($value = true);
            $table->text('Vehicle_Color')->nullable($value = true);
            $table->text('Vehicle_Initial_Mileage')->nullable($value = true);
            $table->text('Vin_Number')->nullable($value = true);
            $table->text('Vehicle_Image')->nullable($value = true);
            $table->text('Emission_Number')->nullable($value = true);
            $table->date('Emission_Expiry_Date')->nullable($value = true);
            $table->text('Medallion_Number')->nullable($value = true);
            $table->date('Medallion_Expiry_Date')->nullable($value = true);
            $table->text('Registration_Number')->nullable($value = true);
            $table->date('Registration_Expiry')->nullable($value = true);
            $table->text('Company')->nullable($value = true);
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

        Schema::dropIfExists('vehicles');
    }
}
