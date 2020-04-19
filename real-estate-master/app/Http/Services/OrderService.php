<?php
namespace App\Http\Services;

use App\Models\Order;

class OrderService
{
	public function create($data)
    {
        return Order::create($data);
    }

    public function update($order, $data)
    {
        return Order::where('id', $order->id)->update($data);
    }

    public function delete($order)
    {
        return $order->update($data);
    }
}

?>
