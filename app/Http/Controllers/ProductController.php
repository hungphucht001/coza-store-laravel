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
            'title' => 'Coza Store | Products',
            'menus' => $menus,
            'products' => $products
        ]);
    }
    public function show($slug)
    {
        $product = $this->productService->getBySlug($slug);
        $products = $this->productService->getByMenu($product->menu_id, $product->id, 8);

        return view('pages.detail', [
            'title' => 'Coza Store | Product Detail',
            'product'=>$product,
            'products'=>$products
        ]);
    }
    public function abc(){
        return (new \App\Http\Resources\ProductCollection($this->productService->getAll(4)));
    }
}
