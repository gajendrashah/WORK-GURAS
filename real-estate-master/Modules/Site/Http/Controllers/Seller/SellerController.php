<?php

namespace Modules\Site\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\ProductImageRepository;
use App\Http\Services\ProductService;
use Modules\Site\Http\Requests\ProductRequest;
use Modules\Site\Http\Requests\ProductUpdateRequest;
use App\Http\Traits\ResponseTrait;
use Laracasts\Flash\Flash;
use Auth;

use Carbon\Carbon;
use Validator;
use Session;


class SellerController extends Controller
{
    use ResponseTrait;

    protected $productRepository;

    protected $productImage;

    protected $productService;

    public function __construct(ProductRepository $productRepository, ProductImageRepository $productImage, ProductService $productService)
    {
        $this->productRepository = $productRepository;

        $this->productService = $productService;

        $this->productImage = $productImage;
    }

    public function index() 
    {
        return view('site::account.seller.index');
    }  
    
    public function show($id) 
    {
        $product = $this->productRepository->find($id);

        $data = [
            "product" =>  $product,

            "additionalImages" =>  $product->additionalImages
        ];

        return view('site::account.seller.show', $data);
    }    

    public function create() 
    {
        return view('site::account.seller.create');
    } 
    
    public function store(ProductRequest $request) 
    {
        $input  = $request->all();

        $input['user_id'] = Auth::user()->id;
        $video_url =$input['video_link'];
        $video_url = explode('https://youtu.be/', $video_url);
        $input['video_link'] = $video_url['1'];
        
        unset($input['main_image']);

        if($product = $this->productService->create($input)) {

            $destinationPath = public_path() . config('dashboard.products');

            if ($fileName = isFileExist($request, $product, 'main_image', $destinationPath)) {
                $product->main_image = $fileName;
                $product->update();
            } 

            if (!empty($input['additional_image'])) {

                foreach ($input['additional_image'] as $imageId) {
                    $productImage = $this->productImage->find($imageId);
                    $productImage->product_id = $product->id;
                    $productImage->save();
                }
            }

            // Delete Images with Id
            if (!empty($input['remove_image'])) {
                foreach ($input['remove_image'] as $imageId) {
                    $productImage = $this->productImage->find($imageId);
                    $productImage->delete();
                }
            }

            Flash::success($this->success());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('seller.property.index');
    }
    
    
    public function edit($id) 
    {
        $product = $this->productRepository->find($id);

        $data = [
            "product" =>  $product,

            "additionalImages" =>  $product->additionalImages
        ];
        return view('site::account.seller.edit', $data);
    }    

    public function update(ProductUpdateRequest $request, $id) 
    {
       try {
            $input = $request->all();
        
            $product = $this->productRepository->find($id);

            
            $video_url =$input['video_link'];
            $video_url = explode('https://youtu.be/', $video_url);
            $input['video_link'] = $video_url['1'];

            if($data = $this->productService->update($product, $input)) {

                $destinationPath = public_path() . config('dashboard.products');

                if ($fileName = isFileExist($request, $product, 'main_image', $destinationPath)) {
                    $product->main_image = $fileName;
                    $product->update();
                }
                
                if ($request->hasFile('image') == true) {
                    $imagesFiles = $request->file('image');
                    
                    $this->productImage->deleteByProductId($id);

                    foreach($imagesFiles as $file) {
                        $destinationPath = public_path() . config('dashboard.additional-products');

                        if ($fileName = isFilesExist($file, $destinationPath)) {
                            $data = array();
                            $data['product_id'] = $id;
                            $data['images'] = $fileName;
                            $this->productImage->save($data);
                        }
                    }
                    
                }
    
                Flash::success($this->updated());
            }
            else {
                Flash::error($this->tryAgain());
            }
        } catch (\Throwable $e) {
            flash($e->getMessage())->error();
        }
        return redirect()->back();
    }   
    
    public function destroy($id) 
    {
        $product = $this->productRepository->find($id);

        if($this->productService->delete($product)) {

            Flash::success($this->deleted());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->back();

    } 

    public function ordersList()
    {
        return view('site::account.seller.orders.index');
    }

    public function salesList()
    {
        return view('site::account.seller.sales.index');
    }
    
    public function getBasicData()
    {
        return $this->productRepository->getDataTable();
    }

    public function getOrdersBasicData()
    {
        return $this->productRepository->getOrdersSalesDataTable(false);
    }

    public function getSalesBasicData()
    {
        return $this->productRepository->getOrdersSalesDataTable(true);
    }
    
    public function propertyTypeFormLoad($propertyType) 
    {
        if($propertyType == "House") {
            return view('site::account.seller.house');
        }
        elseif($propertyType == "Office Space") {
            return view('site::account.seller.office');
        }
        elseif($propertyType == "Appartments") {
            return view('site::account.seller.appartment');
        }
        elseif($propertyType == "Land") {
            return view('site::account.seller.land');
        }
        return view('site::account.seller.house');
    }

    public function additionalUpload(Request $request)
    {
        try {
            $input = $request->all();
            
            if ($request->hasFile('file')) {

                $rules = [
                    'file' => 'image|mimes:jpeg,jpg,png|max:10000'
                ];

                $messages = [
                    'file.max' => 'Only 10Mb max file size allowed',
                    'file.mimes' => 'Only jpeg, jpg, png file allowed',
                ];

                $validator = Validator::make($input, $rules, $messages);

                if ($validator->fails()) {

                    $errors = $validator->errors();
                    return response()->json(['error' => $errors->first('file')], 500);
                }

                $destinationPath = public_path() . config('dashboard.additional-products');

                if ($fileName = isFilesExist($input['file'], $destinationPath)) {
                    $productImage = $this->productImage->save(['images' => $fileName]);
                } 

                return response()->json(['image_id' => $productImage->id, 'image_name' => $productImage->image], 200);
            }

        } catch (\Throwable $t) {
            return response()->json(['error' => $t->getMessage() . " LINE:: " . $t->getLine() . "FILE:: " . $t->getFile()], 500);
        }
    }
}