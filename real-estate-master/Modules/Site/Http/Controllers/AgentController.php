<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\AdsRepository;

class AgentController extends Controller
{
    protected $adsRepository;

    public function __construct(AdsRepository $adsRepository)
    {
        $this->adsRepository = $adsRepository;
    }
    public function index()
    {
        $data = [
        'advertisement' => $this->adsRepository->findlimitData(6)];

        return view('site::agent.index',$data);
    }
    public function single()
    {
        $data = [
        'advertisement' => $this->adsRepository->findlimitData(6)];

        return view('site::agent.single',$data);
    }
}