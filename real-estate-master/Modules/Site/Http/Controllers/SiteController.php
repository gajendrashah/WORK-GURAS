<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('site::home.index');
    }

    public function propertyForSale(Request $request) 
    {
        return view('site::product-list.property-for-sale');
    }

    
}
