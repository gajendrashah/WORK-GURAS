<?php
namespace App\Http\Services;

use App\Models\Ads;

class AdsService
{
	public function create($data)
    {
        return Ads::create($data);
    }

    public function update($ads, $data)
    {
        return $ads->update($data);
    }

    public function delete($ads)
    {
        return $ads->delete();
    }
}

?>
