<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {

            $table->increments('id');
            $table->json('service_area');
            $table->longText('requirements');
            $table->string('name');
            $table->string('email');
            $table->string('country_code');
            $table->string('number');
            $table->string('company_name');
            $table->string('company_type');
            $table->string('website');
            $table->string('address');
            $table->string('social_type');
            $table->string('network_id');
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
        Schema::dropIfExists('contacts');
    }
}
