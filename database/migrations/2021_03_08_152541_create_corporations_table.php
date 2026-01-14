<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporations', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id')->nullable();
            $table->string('status')->nullable();
            $table->string('corporation_name')->nullable();
            $table->string('incorporation_date')->nullable();
            $table->string('state')->nullable();
            $table->string('corporation_type')->nullable();
            $table->string('corporation_sub_type')->nullable();
            $table->string('irisno')->nullable();
            $table->string('pin')->nullable();
            $table->string('corporate_registered_address')->nullable();
            $table->string('state1')->nullable();
            $table->string('feinno')->nullable();
            $table->string('corporate_owner_chauffeurno')->nullable();
            $table->string('file_number')->nullable();
            $table->string('annual_report_filling_date')->nullable();
            $table->string('corporation_address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('agent_address1')->nullable();
            $table->string('agent_address2')->nullable();
            $table->string('state2')->nullable();
            $table->string('city1')->nullable();
            $table->string('zip_code1')->nullable();
            $table->string('agent_change_date')->nullable();
            $table->string('president_name')->nullable();
            $table->string('email1')->nullable();
            $table->string('phone_number1')->nullable();
            $table->string('president_address1')->nullable();
            $table->string('president_address2')->nullable();
            $table->string('state3')->nullable();
            $table->string('city2')->nullable();
            $table->string('zip_code2')->nullable();
            $table->string('secretary_name')->nullable();
            $table->string('email2')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('secretary_address1')->nullable();
            $table->string('secretary_address2')->nullable();
            $table->string('state4')->nullable();
            $table->string('city3')->nullable();
            $table->string('zip_code3')->nullable();
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
        Schema::dropIfExists('corporations');
    }
}
