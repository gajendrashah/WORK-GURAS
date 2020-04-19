<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\UserRepository;

class BuyerController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $buyer = $this->userRepository->findAll('buyer');

        return view('admin::buyer.index', compact('buyer'));
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
