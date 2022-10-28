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
    {/* 'name', 'email', 'number', 'address', 'service_request', 'experience', 'problem', 'solution', 'flood_experience', 'farm_location', 'flood_impact', 'recovery', 'cost_peryear', 'profit_made', 'perm_to_share' */
        Schema::create('contact_requests', function (Blueprint $table) {
            $table->char('name');
            $table->string('email');
            $table->char('number');
            $table->string('address');
            $table->text('service_request');
            $table->longText('experience');
            $table->longText('problem');
            $table->longText('solution');
            $table->longText('flood_experience');
            $table->longText('farm_location');
            $table->longText('flood_impact');
            $table->longText('recovery');
            $table->float('cost_peryear');
            $table->float('profit_made');
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
