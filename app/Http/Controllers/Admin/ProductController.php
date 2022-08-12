<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateFormRequest;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productService, $menuService;
    public function __construct(ProductService $productService, MenuService $menuService)
    {
        $this->productService = $productService;
        $this->menuService = $menuService;
    }

    public function index()
    {
        $products= $this->productService->getAll();
        return view('pages.admin.products.index',
            [
                'title_heading'=>'Product',
                'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
                'data'=> $products,
            ]
        );
    }
    public function create(){
        $menus = $this->menuService->getAll();
        return view('pages.admin.products.add',
            [
                'title_heading'=>'Product',
                'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
                'menus' => $menus
            ]
        );
    }
    public function show($id)
    {
        $data = $this->productService->get($id);
        $isExist = $data == null;
        $menus = $this->menuService->getAll();

        return view('pages.admin.products.edit',[
            'isExist'=> $isExist,
            'title_heading'=>'Product',
            'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
            'data'=> $data,
            'menus' => $menus
        ]);
    }

    public function update(CreateFormRequest $request, $id){
        $this->productService->update($request, $id);
        return redirect()->back();
    }

    public function destroy($id){
        $this->productService->softDelete($id);
        return redirect()->back();
    }

    public function store(CreateFormRequest $request){
        $this->productService->create($request);
        return redirect()->back();
    }
}
