<?php

namespace App\Http\Repositories;

use App\Models\Product;
use Yajra\DataTables\Facades\DataTables;
use Form;
use Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
class ProductRepository
{
    public function findAll($limit, $filter = [], $status = false)
    {
        $result = Product::when(array_keys($filter, true), function ($query) use ($filter) {
            
            if (array_key_exists('property_type', $filter) and $filter['property_type'] != '') {
                $query->where('property_type', $filter['property_type']);
            }
            if (array_key_exists('sell_type', $filter) and $filter['sell_type'] != '') {
                $query->where('sell_type', $filter['sell_type']);
            }

           
            return $query;
        })
            ->where('status', $status)
            ->take($limit)
            ->latest('id')
            ->get();

        return $result;
    }
    public function findByName($column,$name)
    {
        $result = Product::where($column , '=', $name)->get();
        return $result;
    }   
    public function allProduct()
    {
        return Product::latest('id')->get();

    }

    public function products($request)
    {
        // dd($slug);
        //$products 
        $request = $request->all();

        $result = Product::when(array_keys($request, true), function ($query) use ($request) {
            
            if (array_key_exists('category', $request) and $request['category'] != '') {
                $query->where('sell_type', 'like', '%'. $request['category'] .'%');
            }

            if (array_key_exists('property_type', $request) and $request['property_type'] != '') {
                $query->where('property_type', 'like',  '%'. $request['property_type'] .'%' );
            }

            if (array_key_exists('urgent', $request) and $request['urgent'] != '') {
                if($request['urgent'] == "yes") {
                    $query->where('is_urgent', 1);
                }
            }

            if (array_key_exists('premium', $request) and $request['premium'] != '') {
                if($request['premium'] == "yes") {
                    $query->where('is_premium', 1);
                }
                
            }

            if (array_key_exists('from', $request) and $request['from'] != '' and array_key_exists('to', $request) and $request['to'] != '') {
                if(isset($request['to'])) {
                    $query->where('price', '>=', (int) $request['from']);
                    $query->where('price', '<=', (int) $request['to']);
                }
                else {
                    $query->where('price', '>=', (int) $request['from']);
                }
            }

           
            return $query;
        })
            ->where('status', false)
            ->latest('id')
            ->get();

        return $result;

        
    }

    public function search($request)
    {
        Builder::macro('whereLike', function ($attributes, string $searchTerm) {
            $this->where(function (Builder $query) use ($attributes, $searchTerm) {
                foreach (Arr::wrap($attributes) as $attribute) {
                    $query->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
                }
            });
        
            return $this;
        });

        $query = Product::where('status', false);

        if($request->category != "") {
            $query = $query->where('property_type', $request->category);
        }
        
        $result = $query->whereLike(['title', 'price',  'property_type', 'state', 'city', 'locality', 'name_of_project_society'], $request->q)
            ->latest('id')
            ->get();

        return $result;
    }
    
    public function advSearchproducts($request)
    {
        Builder::macro('whereLike', function ($attributes, string $searchTerm) {
            $this->where(function (Builder $query) use ($attributes, $searchTerm) {
                foreach (Arr::wrap($attributes) as $attribute) {
                    $query->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
                }
            });
        
            return $this;
        });
        $query = Product::where('status', false);

        $request = $request->all();

        $result = Product::when(array_keys($request, true), function ($query) use ($request) {
            
            if (array_key_exists('category', $request) and $request['category'] != '') {
                $query=$query->where('sell_type', 'like', '%'. $request['category'] .'%');
            }

            if (array_key_exists('property_type', $request) and $request['property_type'] != '') {
                $query=$query->where('property_type', 'like',  '%'. $request['property_type'] .'%' );
            }
            if (array_key_exists('bedrooms', $request) and $request['bedrooms'] != '') {
                $query=$query->where('bedrooms_no', '>=',(int) $request['bedrooms']);
            }
            if (array_key_exists('bathrooms', $request) and $request['bathrooms'] != '') {
                $query=$query->where('bathrooms_no','>=',(int) $request['bathrooms']);
            }

            if (array_key_exists('from', $request) and $request['from'] != '' and array_key_exists('to', $request) and $request['to'] != '') {
                if(isset($request['to'])) {
                    $query=$query->where('price', '>=', (int) $request['from']);
                    $query=$query->where('price', '<=', (int) $request['to']);
                }
                else {
                    $query=$query->where('price', '>=', (int) $request['from']);
                }
            }
            if (array_key_exists('quest', $request) and $request['quest'] != '') {
                $query=$query->whereLike(['title', 'price',  'property_type', 'state', 'city', 'locality', 'name_of_project_society'], $request['quest']);
            }
            return $query;
        })
        ->latest('id')
        ->get();

        return $result;

        
    }

    public function featuredProduct()
    {
        return Product::where('is_premium', true)->latest('id')->take(4)->get();
    }
    public function trendingProduct()
    {
        return Product::where('is_urgent', true)->latest('id')->take(4)->get();
    }
    public function firstSliderFet() 
    {
        return Product::where('is_urgent', true)->first();
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function getDataTable() 
	{
        $dataTable = $this->getBasicDataTable();
        $dataTable = $this->addAction($dataTable);
        return $dataTable->make(true);
    }

    public function getBasicDataTable()
    {
        $userId = Auth::user();
        
        $products = $userId->products()->where('status', false)->get();

        return Datatables::of($products);
    }

    public function addAction($dataTable)
    {
        return $dataTable->addColumn('action', function($product) {
            $actionHtml = 
            "<a href=" . route('seller.property.show', $product->id) . " class='btn btn-success btn-xs pull-left'>
                <i class='fa fa-eye'></i>
            </a>"; 
    
            $actionHtml .= 
            "<a href=" . route('seller.property.edit', $product->id) . " class='btn btn-primary btn-xs pull-left'>
                <i class='fa fa-edit'></i>
            </a>"; 

            $actionHtml .=            
                Form::open([
                    'url' => route('seller.property.destroy', $product->id), 
                    'method' => 'Delete',
                    'class' => 'pull-right'
                ]) . 
                    "<a class='btn btn-danger btn-xs' onclick=\"if(!confirm('Are you sure you want to delete ?')) return false;\"> <i class='fa fa-trash'> </i>
                    </a> ".
                Form::close();
            
            return $actionHtml;
        });
    }

    


}