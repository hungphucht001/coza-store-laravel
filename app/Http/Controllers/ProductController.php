<?php

namespace App\Http\Controllers;

use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService;

class ProductController extends Controller
{
    protected $menuService, $productService;

    public function __construct(ProductService $productService, MenuService $menuService)
    {
        $this->productService = $productService;
        $this->menuService = $menuService;
    }

    public function index()
    {
        $menus = $this->menuService->getAll();
        $products = $this->productService->getAll();
        return view('pages.product',[
            'menus' => $menus,
            'products' => $products
        ]);
    }
    public function show($slug)
    {
        $product = $this->productService->getBySlug($slug);
        return view('pages.detail', [
            'product'=>$product
        ]);
    }
}
