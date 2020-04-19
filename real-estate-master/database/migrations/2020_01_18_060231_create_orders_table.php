<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->boolean('is_site_visit')->default(0);
            $table->integer('is_immediate_purchase')->default(0);
            $table->integer('is_home_loan')->default(0);
            $table->string('site_visit_date')->nullable();
            $table->string('site_visit_time')->nullable();
            $table->boolean('sales_status')->default(0);
            $table->boolean('admin_confirm_status')->default(0);
            $table->longText('details')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
