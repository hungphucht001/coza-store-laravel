<?php

namespace App\Http\Services\Menu;

use App\Http\Requests\Menu\CreateFormRequet;
use App\Models\Menu;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService
{
    public function getParent(){
        return Menu::where('parent_id', 0)->get();
    }

    public function get($id){
        return Menu::find($id);
    }

    public function create(CreateFormRequet $request){
        try {
            Menu::create([
                'name' => (string)$request->input('name'),
                'slug' => Str::of($request->input('name'))->slug('-'),
                'parent_id' => (int)$request->input('parent_id'),
                'description' => (string)$request->input('description'),
                'content' => (string)$request->input('content'),
                'active' => (string)$request->input('active'),
            ]);

            Session::flash('success', 'Tạo Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }
    public function delete($id){
        try {
            Menu::where('id', $id)->delete();

            Session::flash('success', 'Xóa thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }

    public function update($request, $id){
        try {
            $menu = Menu::find($id);
            $menu->name = $request->name;
            $menu->slug = Str::slug($request->name);
            $menu->parent_id = $request->parent_id;
            $menu->description = $request->description;
            $menu->content = $request->content;
            $menu->active = $request->active;

            $menu->save();

            Session::flash('success', 'Update thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
}
