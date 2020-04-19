<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\OrderRepository;
use App\Http\Services\OrderService;
use App\Http\Traits\ResponseTrait;
use Laracasts\Flash\Flash;
use Auth;

use Carbon\Carbon;
use Validator;
use Session;

class OrderController extends Controller
{
    use ResponseTrait;

    protected $orderRepository;

    protected $orderService;

    public function __construct(OrderRepository $orderRepository, OrderService $orderService)
    {
        $this->orderRepository = $orderRepository;

        $this->orderService = $orderService;
    }

    public function index()
    {
        $data = [
            'orders' => $this->orderRepository->findOrderAll()
        ];

        return view('admin::orders.index', $data);
    }

    public function orderConfirm(Request $request, $id) 
    {
        if($order = $this->orderRepository->find($id)) {
            
            $this->orderService->update($order, ['admin_confirm_status' => 1]);

            Flash::success($this->updated());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->back();
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
        
        return view('admin::orders.show', $data);
    }

    
}
