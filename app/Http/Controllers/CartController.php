<?php

namespace App\Http\Controllers;

use App\Http\Services\Product\ProductService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $carts =[];
        if (session()->has('carts')) {
            $carts = session()->get('carts');
        }
        return view('pages.cart', [
            'title'=>'Coza Store | Shoping Cart',
            'data' => $carts
        ]);
    }
    public function add(Request $request){
        $data = $request->json()->all();

        $product = $this->productService->get($data['id']);
        $pro = [
            'name'=> $product->name,
            'price'=> $product->price,
            'thumb' => $product->images[0]->thumb
        ];
        $data = array_merge($data,$pro);
        if (session()->has('carts')) {
            $temp = session()->get('carts');
            $carts = array_merge([$data], $temp);
            session(['carts' => $carts]);
        }
        else {
            session(['carts' => [$data]]);
            $carts = session()->get('carts');
        }

        return response([
           'message'=> 'success',
           'status' => 200,
           'data' => $carts,
       ], 200);
    }

    public function get_cart(){
        if (session()->has('carts')) {
            $carts = session()->get('carts');
            return response([
                'message'=> 'success',
                'status' => 200,
                'data' => $carts,
            ], 200);
        }
        return response([
            'message'=> 'success',
            'status' => 200,
            'data' => [],
        ], 200);
    }
}
