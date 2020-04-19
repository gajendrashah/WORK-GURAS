<?php

namespace App\Http\Repositories;

use App\Models\Slider;

class SliderRepository
{
    public function getFormData($slider)
    {
        return [
            'slider' => $slider
        ];
    }

    public function findAll()
    {
        return Slider::select()->get();
    }

    public function firstSlider() 
    {
        return Slider::where('status', true)->first();
    }

    public function findAllSliderActive()
    {
        return Slider::where('status', true)->orderBy('ordering', 'asc')->skip(1)->take(5)->get();
    }
    public function find($id)
    {
        return Slider::find($id);
    }
}
