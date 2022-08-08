<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;

class MenuService
{
    public function getParent(){
        return Menu::where('parent_id', 0)->get();
    }
}
