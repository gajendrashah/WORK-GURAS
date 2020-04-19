<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\AdsRepository;
use App\Http\Repositories\SliderRepository;

class HomeController extends Controller
{
    protected $productRepository;

    protected $adsRepository;

    protected $sliderRepository;

    public function __construct(ProductRepository $productRepository, AdsRepository $adsRepository, SliderRepository $sliderRepository)
    {
        $this->productRepository = $productRepository;

        $this->adsRepository = $adsRepository;

        $this->sliderRepository = $sliderRepository;
    }

    public function index()
    {
        $data = [
            'firstSlider' => $this->sliderRepository->firstSlider(),
            'otherSlider' => $this->sliderRepository->findAllSliderActive(),
            'firstSliderFet' => $this->productRepository->firstSliderFet(),
            'otherSliderFet' => $this->productRepository->featuredProduct(),

            'advertisement' => $this->adsRepository->findlimitData(6),
            'features' => $this->productRepository->featuredProduct(4),
            'trending' => $this->productRepository->trendingProduct(4),
            'latest' => $this->productRepository->findAll(8),
            'rent' => $this->productRepository->findAll(4, ['sell_type' => 'rent']),
            'home' => $this->productRepository->findAll(4, ['property_type' => 'House']),
            'land' => $this->productRepository->findAll(4, ['property_type' => 'Land']),
            'appartment' => $this->productRepository->findAll(4, ['property_type' => 'Appartments']),
            'office' => $this->productRepository->findAll(4, ['property_type' => 'Office Space']),
            'ktm' => $this->productRepository->findByName('city','Kathmandu')->count(),
            'bkt' => $this->productRepository->findByName('city','Bhaktapur')->count(),
            'ltp' => $this->productRepository->findByName('city','Lalitpur')->count(),
            'pok' => $this->productRepository->findByName('city','Pokhara')->count(),
            'chit' => $this->productRepository->findByName('city','Chitean')->count()
        ];

        return view('site::home.index', $data);
    }

    public function contactus(){
        $data = [
            'advertisement' => $this->adsRepository->findlimitData(6)
        ];
        return view('site::home.contactus',$data);
    }
    public function buyingGuide(){
        return view('site::home.buyingguide');
    }
    public function sellingGuide(){
        return view('site::home.sellingguide');
    }
    public function tipsGuide(){
        return view('site::home.tipsGuide');
    }
    public function buyingTips(){
        return view('site::home.buyingTips');
    }
    public function roiTIps(){
        return view('site::home.returnonInvestment');
    }
    public function legalServices(){
        return view('site::home.legalServices');
    }
}
