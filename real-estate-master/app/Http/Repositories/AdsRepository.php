<?php

namespace App\Http\Repositories;

use App\Models\Ads;

class AdsRepository
{
    public function getFormData($ads)
    {
        return [
            'ads' => $ads
        ];
    }

    public function findAll()
    {
        return Ads::select()->get();
    }

    public function findlimitData($limit)
    {
        return Ads::orderBy('sort_order', 'asc')->take($limit)->get();
    }

    public function find($id)
    {
        return Ads::find($id);
    }
}
