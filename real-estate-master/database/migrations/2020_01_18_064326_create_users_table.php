<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
                // $table->string('address_1')->nullable();
                // $table->string('address_2')->nullable();
                // $table->string('address_3')->nullable();
                // $table->string('district')->nullable();
                // $table->string('mobile')->nullable();
            $table->string('user_type')->default('seller')->comment("seller|buyer");
            $table->boolean('external_auth')->default(0);
            $table->string('provider',20)->nullable()->comment("facebook|gmail|twitter");
            $table->string('provider_id',20)->nullable();
            $table->string('registered_ip',50)->nullable();
            $table->boolean('email_verified')->default(0)->nullable();
            $table->string('verification_token')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('created_by_id',false)->nullable();
            $table->string('last_logged_ip')->nullable();
            $table->dateTime('last_active')->nullable();
            $table->string('varification_code')->nullable();
            $table->rememberToken();
            $table->softDeletes();

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
        Schema::dropIfExists('users');
    }
}
