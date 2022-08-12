<?php

namespace App\Http\Services\Product;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Nette\Utils\DateTime;

class ProductService
{
    public function getAll(){
        return Product::with('menu')->with('images')
            ->orderByDesc('id')->paginate(15);
    }
    public function get($id){
        return Product::with('menu')->with('images')->find($id);
    }

    public function getBySlug($slug){
        return Product::with('menu')->with('images')->where('slug', $slug)->first();
    }

    public function softDelete($id){
        try{
            Product::where('id', $id)->delete();
            Session::flash('success', "Xoa thanh cong");
        }catch (\Exception $err){
            Session::flash('error', "Xoa that bai");
            return false;
        }
        return true;
    }
    public function update($request, $id){
        try {

            $product = Product::find($id);
            if($product != null){

                $product->name = $request->name;
                $product->price = $request->price;
                $product->price_sale = $request->price_sale;
                $product->menu_id = $request->menu_id;
                $product->description = $request->description;
                $product->content = $request->content;
                $product->active = $request->active;
                $product->slug = Str::of($request->name)->slug('-');

                $product->save();

                if($request->file('images')){
                    $date = new DateTime();
                    foreach ($request->file('images') as $i){
                        $name = $date->getTimestamp().'_'.$this->generateRandomString(15).'.'.$i->extension();
                        $i->storeAs('public/images', $name);
                        Image::create([
                            'product_id'=> (integer) $product->id,
                            'thumb' => (string)$name,
                        ]);
                    }
                }
                Session::flash('success','Update success!');

                return true;
            }
            else{
                Session::flash('error', 'Khong tim thay san pham can cap nhat');
                return false;
            }

        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
    }

    public function create($request){
        try {

            $product = new Product;

            $product->name = $request->name;
            $product->price = $request->price;
            $product->price_sale = $request->price_sale;
            $product->menu_id = $request->menu_id;
            $product->description = $request->description;
            $product->content = $request->content;
            $product->slug = Str::of($request->name)->slug('-');
            $product->active = $request->active;
            $product->save();
            $date = new DateTime();
            if($request->file('images')){
                foreach ($request->file('images') as $i){
                    $name = $date->getTimestamp().'_'.$this->generateRandomString(15).'.'.$i->extension();
                    $i->storeAs('public/images', $name);
                    Image::create([
                        'product_id'=> (integer) $product->id,
                        'thumb' => (string)$name,
                    ]);
                }
            }
            Session::flash('success','Update success!');
            return true;

        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            return false;
        }
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
