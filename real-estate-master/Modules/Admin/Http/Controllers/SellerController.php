<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\UserRepository;
use App\Http\Repositories\ProductRepository;

class SellerController extends Controller
{
    protected $productRepository;

    protected $userRepository;

    public function __construct(UserRepository $userRepository, ProductRepository $productRepository)
    {
        $this->userRepository = $userRepository;

        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $seller = $this->userRepository->findAll('seller');
        
        return view('admin::seller.index', compact('seller'));

    }

    public function show($id)
    {
        $user = $this->userRepository->find($id);

        return view('admin::seller.show', compact('user'));        
    }

    public function productList($id)
    {
        $user = $this->userRepository->find($id);
        
        $data = [
            'products' => $user->products
        ];
       
        return view('admin::seller.product-list', $data);        
    }
}
