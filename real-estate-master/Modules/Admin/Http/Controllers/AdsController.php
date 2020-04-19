<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Requests\AdsRequest;
use App\Models\Ads;
use App\Http\Repositories\AdsRepository;
use App\Http\Services\AdsService;
use App\Http\Traits\ResponseTrait;

use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class AdsController extends Controller
{
    use ResponseTrait;

    protected $adsRepository;

    protected $adsService;

    public function __construct(AdsRepository $adsRepository, AdsService $adsService)
    {
        $this->adsRepository = $adsRepository;

        $this->adsService = $adsService;
    }

    public function index()
    {

        $ads = $this->adsRepository->findAll();

        return view('admin::ads.index', compact('ads'));
    }

    public function create(Ads $ads)
    {
        $data = $this->adsRepository->getFormData($ads);

        return view('admin::ads.form', $data);
    }

    public function store(Request $request)
    {
        if($ads = $this->adsService->create($request->only('title', 'link', 'file_name', 'script', 'placement', 'is_popup', 'start_date', 'end_date', 'status', 'sort_order', 'link', 'details', 'created_by'))) {

            $destinationPath = public_path() . config('dashboard.ads');

            if ($fileName = isFileExist($request, $ads, 'file_name', $destinationPath)) {
                $ads->file_name = $fileName;
                $ads->update();
            } 

            Flash::success($this->success());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('admin.ads.index');
    }

    public function edit($id)
    {
        $ads = $this->adsRepository->find($id);

        $data = $this->adsRepository->getFormData($ads);

        return view('admin::ads.form', $data);
    }

    public function update(Request $request, $id)
    {
        $ads = $this->adsRepository->find($id);

        if($data = $this->adsService->update($ads, $request->only('title', 'link', 'file_name', 'script', 'placement', 'is_popup', 'start_date', 'end_date', 'status', 'sort_order', 'link', 'details', 'created_by'))) {

            $destinationPath = public_path() . config('dashboard.ads');

            if ($fileName = isFileExist($request, $ads, 'file_name', $destinationPath)) {
                $ads->file_name = $fileName;
                $ads->update();
            }

            Flash::success($this->updated());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('admin.ads.index');

    }

    public function destroy($id)
    {
        $ads = $this->adsRepository->find($id);

        if($ads = $this->adsRepository->find($ads->id)) {
            $this->adsService->delete($ads);
        }

        if($this->adsService->delete($ads)) {

            Flash::success($this->deleted());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->back();

    }
}
