<?php
namespace App\Http\Services;

use App\Models\Slider;

class SliderService
{
	public function create($data)
    {
        return Slider::create($data);
    }

    public function update($slider, $data)
    {
        return $slider->update($data);
    }

    public function delete($slider)
    {
        return $slider->delete();
    }
}

?>
