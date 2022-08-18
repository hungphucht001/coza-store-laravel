<?php

namespace App\Http\Controllers;

use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Slider\SliderService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $menuService, $productService, $sliderService;
    public function __construct(ProductService $productService, MenuService $menuService, SliderService $sliderService)
    {
        $this->productService = $productService;
        $this->menuService = $menuService;
        $this->sliderService = $sliderService;
    }
    public function home()
    {
        $menus = $this->menuService->getAll();
        $products = $this->productService->getAll();
        $sliders = $this->sliderService->getAll();
        return view('pages.home', [
            'title'=>'Coza Store',
            'menus' => $menus,
            'products' => $products,
            'sliders' => $sliders
        ]);
    }
    public function about()
    {
        return view('pages.about', [
            'title'=>'Coza Store | About'
        ]);
    }
    public function contact()
    {
        return view('pages.contact', [
            'title'=>'Coza Store | Contact'
        ]);
    }
    public function search(){
        return view('pages.search');
    }
}
