<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    //
    protected $fillable = ['title', 'link', 'file_name', 'script', 'placement', 'is_popup', 'start_date', 'end_date', 'status', 'sort_order', 'link', 'details', 'created_by'];
}
