<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\ProductImage;
use App\Models\User;

class Product extends Model
{
    //
    protected $fillable = ['user_id', 'person_type', 'sell_type', 'title', 'property_type', 'state', 'city', 'locality', 'name_of_project_society',
    'property_status', 'total_rooms_no','no_of_rooms_available','bedrooms_no','bathrooms_no', 'meeting_rooms','kitchen','furnished_status',
    'total_floor_no', 'floor_no', 'colony_name', 'colonies_no','is_in_fence','is_parking','is_main_road_facing', 'road_width','parking-area',
    'plot_length_length', 'plot_length_breath', 'plot_length_measure', 'plot_area_area', 'plot_area_measure',
    'covered_area_length','covered_area_breath','covered_area_area', 'covered_area_measure',
    'price', 'price_type', 'negotiable', 'main_image','video_link','details',
     'is_urgent', 'is_premium','is_exclusively', 'is_term_condition', 'status', 'views', 'sold'];

    public function additionalImages() 
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}