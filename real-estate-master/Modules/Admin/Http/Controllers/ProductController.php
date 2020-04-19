<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $data = [
            'products' => $this->productRepository->allProduct()
        ];

        return view('admin::products.index', $data);
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);

        $data = [
            "user" => $product->user,
            'product' => $product,
            "additionalImages" =>  $product->additionalImages
        ];

        return view('admin::products.show', $data);
    }

}
