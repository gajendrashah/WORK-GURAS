<?php

namespace App\Http\Repositories;

class MenuRepository
{
	public function getAdminMainMenuList()
	{
        // this is main menu list
        return [
			['name' => 'dashboard', 'label' => 'Dashboard'],
			
			['name' => 'configuration', 'label' => 'Slider'],

			['name' => 'seller', 'label' => 'Seller'],
			
			['name' => 'buyer', 'label' => 'Buyer'],

            ['name' => 'products', 'label' => 'Products'],

			['name' => 'orders', 'label' => 'Orders'],
			
			['name' => 'confirm_orders', 'label' => 'Confirm Orders'],

            ['name' => 'sold', 'label' => 'Sold'],

            ['name' => 'ads', 'label' => 'Ad List'],

        ];
	}

	public function getAdminSubMenuList()
	{
		// this is all the routes which we access from submenu
		return [
			[
				'mainMenu' 	=> 'dashboard',
				'label' 	=> 'OverView',
				'route' 	=> route('admin.dashboard'),
			],

			[
				'mainMenu' 	=> 'configuration',
				'label' 	=> 'Slider',
				'route' 	=> route('admin.slider.index'),
			],

            [
				'mainMenu' 	=> 'seller',
				'label' 	=> 'Seller',
				'route' 	=> route('admin.seller'),
            ],

            [
				'mainMenu' 	=> 'buyer',
				'label' 	=> 'Buyer',
				'route' 	=> route('admin.buyer'),
			],

            [
				'mainMenu' 	=> 'products',
				'label' 	=> 'Products',
				'route' 	=> route('admin.products'),
			],

            [
				'mainMenu' 	=> 'orders',
				'label' 	=> 'Order Products',
				'route' 	=> route('admin.orders'),
			],

			[
				'mainMenu' 	=> 'confirm_orders',
				'label' 	=> 'Confirm Orders',
				'route' 	=> route('admin.confirm-orders'),
			],

            [
				'mainMenu' 	=> 'sold',
				'label' 	=> 'Sold Products',
				'route' 	=> route('admin.sold'),
			],

            [
				'mainMenu' 	=> 'ads',
				'label' 	=> 'Ads List',
				'route' 	=> route('admin.ads.index'),
			],

        ];
	}
}
