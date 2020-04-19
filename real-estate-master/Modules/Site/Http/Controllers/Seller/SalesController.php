<?php

namespace Modules\Site\Http\Controllers\Seller;

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

class SalesController extends Controller
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
            'orders' => $this->orderRepository->salesList()
        ];

        return view('site::account.seller.sales.index', $data);
    }
   
    public function getSalesBasicData()
    {
        return $this->orderRepository->getOrdersSalesDataTable(true);
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
        
        return view('site::account.seller.orders.show', $data);
    }
}
