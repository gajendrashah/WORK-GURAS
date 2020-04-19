<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingColumnsCoveredAreaLengthAndBreath extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('covered_area_breath')->nullable()->after('plot_area_measure');
            $table->string('covered_area_length')->nullable()->after('plot_area_measure');
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
            $table->dropColumn('covered_area_breath');
            $table->dropColumn('covered_area_length');
        });
    }
}
