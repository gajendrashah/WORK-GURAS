<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Http\Repositories\ProductRepository;
use App\Http\Services\OrderService;
use App\Http\Repositories\AdsRepository;
use Auth;

class ProductController extends Controller
{
    protected $productRepository;

    protected $adsRepository;

    protected $orderService;

    public function __construct(ProductRepository $productRepository, AdsRepository $adsRepository, OrderService $orderService)
    {
        $this->productRepository = $productRepository;

        $this->adsRepository = $adsRepository;

        $this->orderService = $orderService;
    }

    public function products(Request $request)
    {
        $data = [
            'advertisement' => $this->adsRepository->findlimitData(6),
            'products' => $this->productRepository->products($request),
        ];

        return view('site::products.product-list', $data);
    }

    public function search(Request $request)
    {
        $data = [
            'advertisement' => $this->adsRepository->findlimitData(6),
            'products' => $this->productRepository->search($request)
        ];

        return view('site::products.product-list', $data);
    }
    public function advsearch(Request $request)
    {
        $data = [
            'advertisement' => $this->adsRepository->findlimitData(6),
            'products' => $this->productRepository->advSearchproducts($request)
        ];

        return view('site::products.product-list', $data);
    }
    public function searchCity($column, $name)
    {
        $data = [
            'advertisement' => $this->adsRepository->findlimitData(6),
            'cityproducts' => $this->productRepository->findByName($column, $name)
        ];
        return view('site::products.product-lists', $data);
    }

    public function productDetails($id)
    {
        $product = $this->productRepository->find($id);

        $data = [
            'advertisement' => $this->adsRepository->findlimitData(6),
            'product' => $this->productRepository->find($id),
            
            "additionalImages" =>  $product->additionalImages
        ];

        return view('site::products.product-detail', $data);
    }

    public function productBooking($id)
    {
        $data = [
            'product' => $this->productRepository->find($id)
        ];

        return view('site::products.booking', $data);
    }

    public function productBookingSubmit(Request $request, $id)
    {
        $this->validate($request, [
            'details'   => 'required',
        ]);
        $data = $request->only('name', 'email', 'contact', 'address', 'is_immediate_purchase','sales_status', 'admin_confirm_status', 'details');
        // $data['user_id'] = Auth::user()->id;
        $data['product_id'] = $id;

        if ($order = $this->orderService->create($data)) {
            $data = [
                'response' => "success",
                'message' => "Thank for your order, we will contact you as soon as possible.",
            ];
        } else {
            $data = [
                'response' => "success",
                'message' => "Sorry, Please try again.",
            ];
        }

        return  $data;
    }
}
