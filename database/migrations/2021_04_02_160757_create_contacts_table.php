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
            $table->json('service_area')->nullable();
            $table->longText('requirements')->nullable();
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('country_code')->nullable();
            $table->string('number');
            $table->string('company_name')->nullable();
            $table->string('company_type')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('social_type')->nullable();
            $table->string('network_id')->nullable();
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
