<?php
namespace App\Http\Repositories;

use App\Models\Subscription;

class SubscriptionRepository
{
    public function getFormData(Subscription $subscription)
	{
		return [
			'subscription'		=> $subscription,
		];
	}

    public function find($id)
    {
        return Subscription::find($id);
    }

    public function findAll()
    {
        return Subscription::latest('id')->get();
    }
}
