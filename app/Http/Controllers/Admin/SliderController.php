<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\CreateFormRequest;
use App\Http\Services\Slider\SliderService;

class SliderController extends Controller
{
    protected $slideService;
    public function __construct(SliderService $slideService)
    {
        $this->slideService = $slideService;
    }

    public function index()
    {
        $slide= $this->slideService->getAll();
        return view('pages.admin.slider.index',
            [
                'title_heading'=>'Slider',
                'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
                'data'=> $slide,
            ]
        );
    }
    public function create(){

        return view('pages.admin.slider.add',
            [
                'title_heading'=>'Slider',
                'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',

            ]
        );
    }
    public function show($id)
    {
        $data = $this->slideService->get($id);
        $isExist = $data == null;

        return view('pages.admin.slider.edit',[
            'isExist'=> $isExist,
            'title_heading'=>'Slider',
            'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
            'data'=> $data,
        ]);
    }

    public function update(CreateFormRequest $request, $id){
        $this->slideService->update($request, $id);
        return redirect()->back();
    }

    public function destroy($id){
        $this->slideService->softDelete($id);
        return redirect()->back();
    }

    public function store(CreateFormRequest $request){
        $this->slideService->create($request);
        return redirect()->back();
    }
}
