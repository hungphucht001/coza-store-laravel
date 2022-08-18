<?php

namespace App\Http\Services\Slider;

use App\Models\Image;
use App\Models\Slider;
use Illuminate\Support\Facades\Session;
use Nette\Utils\DateTime;

class SliderService
{
    public function getAll(){
        return Slider::paginate(5);
    }
    public function get($id){
        return Slider::find($id);
    }
    public function softDelete($id){
        try{
            Slider::where('id', $id)->delete();
            Session::flash('success', "Xoa thanh cong");
        }catch (\Exception $err){
            Session::flash('error', "Xoa that bai");
            return false;
        }
        return true;
    }
    public function update($request, $id){
        try {

            $slider = Slider::find($id);
            if($slider != null){

                $slider->name = $request->name;
                $slider->price = $request->price;
                $slider->price_sale = $request->price_sale;
                $slider->menu_id = $request->menu_id;
                $slider->description = $request->description;
                $slider->content = $request->content;
                $slider->active = $request->active;
                $slider->save();
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
            $slider = new Slider();
            $slider->name = $request->name;
            $slider->url = $request->url;
            $slider->sort_by = $request->sort_by;
            $slider->active = $request->active;

            $date = new DateTime();
            $name = $date->getTimestamp().'_'.$this->generateRandomString(15).'.'.$request->file('image')->extension();
            $request->file('image')->storeAs('public/images', $name);
            $slider->thumb = $name;

            $slider->save();

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
