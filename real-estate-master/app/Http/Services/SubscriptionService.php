<?php
namespace App\Http\Services;

use App\Models\Subscription;

class SubscriptionService
{
    public function create($data)
    {
        return Subscription::create($data);
    }

    public function update($id, $data)
    {
        $subscription = Subscription::find($id);

        return $subscription->update($data);
    }

    public function delete($id)
    {
        $subscription = Subscription::find($id);

        return $subscription->update($data);
    }
}
