<?php

namespace Modules\Site\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\BuyRepository;
use App\Http\Traits\ResponseTrait;
use Laracasts\Flash\Flash;
use Auth;

use Carbon\Carbon;
use Validator;
use Session;

class BuyController extends Controller
{
    use ResponseTrait;

    protected $orderRepository;

    public function __construct(BuyRepository $buyRepository)
    {
        $this->buyRepository = $buyRepository;
    }

    public function index()
    {
        return view('site::account.seller.buy.index');
    }

    public function getBuyBasicData()
    {
        return $this->buyRepository->getSellerBuyDataTable();
    }

    public function show($id)
    {
        $order = $this->buyRepository->find($id);

        $product = $order->product;

        $data = [
            "user" => $order->user,
            'order' => $order,
            'product' => $product,
            "additionalImages" =>  $product->additionalImages
            
        ];
        
        return view('site::account.seller.buy.show', $data);
    }

    
}
