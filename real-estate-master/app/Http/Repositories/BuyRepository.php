<?php

namespace App\Http\Repositories;

use App\Models\Order;
use Yajra\DataTables\Facades\DataTables;
use Form;
use Auth;

class BuyRepository
{
    public function find($id)
    {
        return Order::find($id);
    }

    public function getSellerBuyDataTable()
    {
        $dataTable = $this->getBuyBasicDataTable();

        $dataTable = $this->addSellerBuyAction($dataTable);
        
        return $dataTable->make(true);
    }

    public function getBuyerBuyDataTable()
    {
        $dataTable = $this->getBuyBasicDataTable();

        $dataTable = $this->addBuyerBuyAction($dataTable);
        
        return $dataTable->make(true);
    }

    public function getBuyBasicDataTable()
    {
        $userId = Auth::user();
        
        $buyList = $userId->orders()->where('sales_status', true)->with('product');

        return Datatables::of($buyList)
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

    public function addSellerBuyAction($dataTable)
    {
        return $dataTable->addColumn('action', function($buy) {
            $actionHtml = 
            "<a href=" . route('seller.buy.product.detail', $buy->id) . " class='btn btn-primary btn-xs pull-left'>
                <i class='glyphicon glyphicon-edit'></i>
            </a>"; 
    
            return $actionHtml;
        });
    }

    public function addBuyerBuyAction($dataTable)
    {
        return $dataTable->addColumn('action', function($buy) {
            $actionHtml = 
            "<a href=" . route('buyer.buy.product.show', $buy->id) . " class='btn btn-primary btn-xs pull-left'>
                <i class='fa fa-eye'></i>
            </a>"; 
    
            return $actionHtml;
        });
    }
}
