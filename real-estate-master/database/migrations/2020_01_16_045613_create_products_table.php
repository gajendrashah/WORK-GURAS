<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('person_type')->nullable();
            $table->string('sell_type')->nullable();
            $table->string('property_type')->nullable();
            $table->longText('title')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('name_of_project_society')->nullable();
            $table->string('property_status')->nullable();
            
            $table->string('bedrooms_no')->nullable();
            $table->string('bathrooms_no')->nullable();
            $table->string('meeting_rooms')->nullable();
            $table->string('furnished_status')->nullable();
            $table->string('total_floor_no')->nullable();
            $table->string('floor_no')->nullable();
            $table->string('colonies_no')->nullable();
            $table->string('attached_colony')->nullable();
            $table->string('attached_colony_gate')->nullable();
            $table->string('is_main_road_facing')->nullable();
            $table->string('road_width')->nullable();
            $table->string('plot_length_length')->nullable();
            $table->string('plot_length_breath')->nullable();
            $table->string('plot_length_measure')->nullable();
            $table->string('plot_area_area')->nullable();
            $table->string('plot_area_measure')->nullable();
            $table->string('covered_area_area')->nullable();
            $table->string('covered_area_measure')->nullable();
            
            $table->string('price')->nullable();
            $table->string('price_type')->nullable();
            $table->string('negotiable')->nullable();
            $table->string('main_image')->nullable();
            $table->text('details')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_urgent')->default(0);
            $table->boolean('brokerage')->default(0);
            $table->boolean('is_exclusively')->default(0);
            $table->boolean('is_term_condition')->default(0);
            $table->boolean('status')->default(0);
            $table->integer('views')->nullable();
            $table->boolean('sold')->default(0);
            $table->boolean('is_hot')->default(0);
            
            // $table->string('is_corner')->nullable();
            // $table->string('carpet_area')->nullable();
            // $table->string('no_of_seats')->nullable();
            // $table->string('open_hours')->nullable();
            // $table->string('corner_shop')->nullable();
            // $table->string('road_width')->nullable();
            // $table->string('no_rooms')->nullable();
            // $table->string('attached_bathroom')->nullable();
            // $table->string('attached_balcony')->nullable();
            // $table->string('common_area')->nullable();
            // $table->string('ac')->nullable();
            // $table->string('bed')->nullable();
            // $table->string('wardrobe')->nullable();
            // $table->string('tv')->nullable();
            // $table->string('fried')->nullable();
            // $table->string('sofa')->nullable();
            // $table->string('dining_table')->nullable();
            // $table->string('microwave')->nullable();
            // $table->string('gas_connection')->nullable();
            // $table->string('personal_washroom')->nullable();
            // $table->string('pantry_cafeteria')->nullable();
            // $table->string('lock_in_period')->nullable();
            // $table->string('corner_showroom')->nullable();
            // $table->string('is_gated_colony')->nullable();

            // $table->string('transaction_type')->nullable();
            // $table->string('possession status')->nullable();
            // $table->string('property_availability')->nullable();

            // $table->string('price_per_seat')->nullable();
            // $table->string('secutiry_amount')->nullable();
            // $table->string('maintenance_chargers')->nullable();
            
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
        Schema::dropIfExists('products');
    }
}
