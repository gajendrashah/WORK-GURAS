<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingTotalNoOfRoomsVideoParkingAreaRoomsForRentProductstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('no_of_rooms_available')->nullable()->after('property_status');
            $table->string('total_no_of_rooms')->nullable()->after('property_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('no_of_rooms_available');
            $table->dropColumn('total_no_of_rooms');
        });
    }
}
