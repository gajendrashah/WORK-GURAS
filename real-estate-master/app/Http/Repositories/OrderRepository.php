<?php

namespace App\Http\Repositories;

use App\Models\Order;
use Yajra\DataTables\Facades\DataTables;
use Form;
use Auth;

class OrderRepository
{
    public function find($id)
    {
        return Order::find($id);
    }

    public function findOrderAll()
    {
        return Order::where('sales_status', false)->where('admin_confirm_status', false)->latest('id')->get();
    }

    public function findConfirmOrderAll()
    {
        return Order::where('sales_status', false)->where('admin_confirm_status', true)->latest('id')->get();
    }

    public function findSalesAll()
    {
        return Order::where('sales_status', true)->latest('id')->get();
    }

    public function orderList() 
    {
        $userId = Auth::user();

        $orderIds = $userId->products()->pluck('id');

        return Order::where('sales_status', false)->find($orderIds);
    }

    public function salesList() 
    {
        $userId = Auth::user();

        $orderIds = $userId->products()->pluck('id');

        return Order::where('sales_status', true)->find($orderIds);
    }


    public function getOrdersSalesDataTable($salesStatus)
    {
        $dataTable = $this->getOrderSalesBasicDataTable($salesStatus);
        if($salesStatus) {
            $dataTable = $this->addSalesAction($dataTable);
        }
        else {
            $dataTable = $this->addOrdersAction($dataTable);
        }
        
        return $dataTable->make(true);
    }

    public function getOrderSalesBasicDataTable($salesStatus)
    {
        $userId = Auth::user();
        
        $products = $userId->orders()->where('sales_status', $salesStatus)->with('product');

        return Datatables::of($products)
            ->addColumn('is_visit', function ($order) {
                return $order->is_home_load ? "Yes" : 'No'; 
            })
            ->addColumn('is_immediate', function ($order) {
                return $order->is_home_load ? "Yes" : 'No'; 
            })
            ->addColumn('is_loan', function ($order) {
                return $order->is_home_load ? "Yes" : 'No'; 
            })
       ;
    }

    public function addOrdersAction($dataTable)
    {
        return $dataTable->addColumn('action', function($order) {
            $actionHtml = 
            "<a href=" . route('seller.property.order.show', $order->id) . " class='btn btn-primary btn-xs pull-left'>
                <i class='fa fa-edit'></i>
            </a>"; 
    
            $actionHtml .=            
                Form::open([
                    'url' => route('seller.property.order.confirm', $order->id), 
                    'method' => 'Post',
                    'class' => 'pull-right'
                ]) . 
                    "<a class='btn btn-danger btn-xs' onclick=\"if(!confirm('Are you sure your property sale?')) return false;\"> <i class='fa fa-trash'> </i>
                    </a> ".
                Form::close();
            
            return $actionHtml;
        });
    }

    public function addSalesAction($dataTable)
    {
        return $dataTable->addColumn('action', function($product) {
            $actionHtml = 
            "<a href=" . route('seller.property.show', $product->id) . " class='btn btn-primary btn-xs pull-left'>
                <i class='fa fa-edit'></i>
            </a>"; 
    
            return $actionHtml;
        });
    }
}
