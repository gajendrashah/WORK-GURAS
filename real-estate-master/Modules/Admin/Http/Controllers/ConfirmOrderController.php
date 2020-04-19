<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\OrderRepository;

class ConfirmOrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        $data = [
            'sales' => $this->orderRepository->findConfirmOrderAll()
        ];

        return view('admin::confirm-orders.index', $data);
    }

    public function show($id)
    {
        $order = $this->orderRepository->find($id);

        $product = $order->product;

        $data = [
            "user" => $order->user,
            'order' => $order,
            'product' => $product,
            "additionalImages" =>  $product->additionalImages
            
        ];
        
        return view('admin::confirm-orders.show', $data);
    }

}
