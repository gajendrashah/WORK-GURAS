<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DroppingAColumnAttachedColonyGateAttachedColonyBrokerageIsHot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('attached_colony');
            $table->dropColumn('attached_colony_gate');
            $table->dropColumn('brokerage');
            $table->dropColumn('is_hot');
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
            $table->string('attached_colony_gate')->nullable()->after('floor_no');
            $table->string('attached_colony')->nullable()->after('floor_no');
            $table->boolean('brokerage')->after('is_urgent')->default(0);
            $table->boolean('is_hot')->after('sold')->default(0);
        });
    }
}
