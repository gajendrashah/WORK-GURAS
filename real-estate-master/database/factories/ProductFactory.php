<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    static $number = 1;

    return [
        //
        'user_id' => $number++,
        'person_type' => 'seller',
        'sell_type' => 'sell',
        'property_type' => 'House',
        'state' => 'Kathmandu',
        'city' => 'Kathmandu',
        'locality' => Str::random(10),
        'name_of_project_socity' => Str::random(10),
        'bed_rooms' => Str::random(10),
        'bal_conies' => Str::random(10),
        'floor_no' => Str::random(10),
        'total_floors' => Str::random(10),
        'furnished_status' => Str::random(10),
        'bathrooms' => Str::random(10),
        'no_of_seats' => Str::random(10),
        'meeting_rooms' => Str::random(10),
        'open_hours' => Str::random(10),
        'corner_shop' => Str::random(10),
        'road_width' => Str::random(10),
        'is_main_road_facing' => Str::random(10),
        'no_rooms' => Str::random(10),
        'attached_bathroom' => Str::random(10),
        'attached_balcony' => Str::random(10),
        'common_area' => Str::random(10),
        'ac' => Str::random(10),
        'bed' => Str::random(10),
        'wardrobe' => Str::random(10),
        'tv' => Str::random(10),
        'fried' => Str::random(10),
        'sofa' => Str::random(10),
        'dining_table' => Str::random(10),
        'microwave' => Str::random(10),
        'gas_connection' => Str::random(10),
        'personal_washroom'=> Str::random(10),
        'pantry_cafeteria' => Str::random(10),
        'lock_in_period' => Str::random(10),
        'corner_showroom' => Str::random(10),
        'is_gated_colony' => Str::random(10),
        'cover_area' => Str::random(10),
        'plot_area' => Str::random(10),
        'plot_length' => Str::random(10),
        'plot_breath' => Str::random(10),
        'is_corner' => Str::random(10),
        'carpet_area' => Str::random(10),
        'transaction_type' => Str::random(10),
        'possession status' => Str::random(10),
        'property_availability' => Str::random(10),
        'monthly_rent' => Str::random(10),
        'price_per_seat' => Str::random(10),
        'secutiry_amount' => Str::random(10),
        'maintenance_chargers' => Str::random(10),
        'description' => Str::random(10),
        'main_image' => Str::random(10),
        'status' => 1,
        'views' => 12,
        'sold' => 0,
        'is_urgent' =>  1,
        'is_premium' => 1,
    ];
});


