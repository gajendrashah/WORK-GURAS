<?php

namespace Modules\Admin\Http\Controllers\Configuration;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Http\Repositories\SliderRepository;
use App\Http\Services\SliderService;
use App\Models\Slider;

use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Traits\ResponseTrait;

class SliderController extends Controller
{
    use ResponseTrait;
    
    protected $sliderRepository;

    protected $sliderService;

    public function __construct(SliderRepository $sliderRepository, SliderService $sliderService)
    {
        $this->sliderRepository = $sliderRepository;

        $this->sliderService = $sliderService;
    }

    public function index()
    {
        $data = [
            'sliders' => $this->sliderRepository->findAll()
        ];

        return view('admin::configuration.slider.index', $data);
    }

    public function create(Slider $slider)
    {
        $data = $this->sliderRepository->getFormData($slider);

        return view('admin::configuration.slider.form', $data);
    }

    public function store(Request $request)
    {
        if($slider = $this->sliderService->create($request->only('title', 'description', 'image', 'ordering', 'status'))) {

            $destinationPath = public_path() . config('dashboard.slider');

            if ($fileName = isFileExist($request, $slider, 'image', $destinationPath)) {
                $slider->image = $fileName;
                $slider->update();
            } 

            Flash::success($this->success());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('admin.slider.index');
    }

    public function edit($id)
    {
        $slider = $this->sliderRepository->find($id);

        $data = $this->sliderRepository->getFormData($slider);

        return view('admin::configuration.slider.form', $data);
        
    }

    public function update(Request $request, $id)
    {
        $slider = $this->sliderRepository->find($id);

        if($data = $this->sliderService->update($slider, $request->only('title', 'description', 'image', 'ordering', 'status'))) {

            $destinationPath = public_path() . config('dashboard.slider');

            if ($fileName = isFileExist($request, $slider, 'image', $destinationPath)) {
                $slider->image = $fileName;
                $slider->update();
            }

            Flash::success($this->updated());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->route('admin.slider.index');
    }

    public function destroy($id)
    {
        $slider = $this->sliderRepository->find($id);

        if($this->sliderService->delete($slider)) {

            Flash::success($this->deleted());
        }
        else {
            Flash::error($this->tryAgain());
        }

        return redirect()->back();
    }
}
