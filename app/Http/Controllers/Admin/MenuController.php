<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

//    public function __construct(MenuService $menuService)
//    {
//
//    }

    public function index(){
        $list_menu = $this->menuService->getParent();
        return view('pages.admin.menu.index',
            [
                'title_heading'=>'Menu List',
                'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
                'data'=> $list_menu
            ]
        );
    }
    public function create(){
        return view('pages.admin.menu.add',
        [
            'title_heading'=>'Menu List',
            'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
        ]);
    }
}
