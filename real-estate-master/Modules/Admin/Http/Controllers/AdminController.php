<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;

class AdminController extends Controller
{
    public function admin()
    {
        return redirect()->route('admin.dashboard');
    }

    public function index()
    {
        $data = [
            'seller' => $this->seller(),
            'buyer' => $this->buyer(),
            'products' => $this->products(),
            'newOrders' => $this->newOrders(),
            'confirmOrders' => $this->confirmOrders(),
            'soldProducts' => $this->soldProducts(),
        ];

        return view('admin::index', $data);
    }

    public function seller() 
    {
        return User::where('user_type', 'seller')->count();
    } 

    public function buyer() 
    {
        return User::where('user_type', 'buyer')->count();
    } 

    public function products() 
    {
        return Product::count();
    } 

    public function newOrders() 
    {
        return Order::where('admin_confirm_status', false)->count();
    } 

    public function confirmOrders() 
    {
        return Order::where('admin_confirm_status', false)->count();
    } 

    public function soldProducts() 
    {
        return Order::where('sales_status', false)->count();
    } 



    
}
