<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequet;
use App\Http\Services\Menu\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;

    }

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

        $list_menu = $this->menuService->getParent();

        return view('pages.admin.menu.add',
        [
            'title_heading'=>'Menu List',
            'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
            'parent_menu'=> $list_menu
        ]);
    }

    public function store(CreateFormRequet $request){

        $this->menuService->create($request);
        return redirect()->back();
    }

    public function show($id)
    {
        $list_menu = $this->menuService->getParent();
        $menu = $this->menuService->get($id);
        $isExist = $menu == null;


        return view('pages.admin.menu.edit',[
            'isExist' => $isExist,
            'title_heading'=>'Menu List',
            'description'=>'A sortable, searchable, paginated table without dependencies
                        thanks to simple-datatables',
            'parent_menu'=> $list_menu,
            'menu'=> $this->menuService->get($id)
        ]);
    }

    public function update(CreateFormRequet $request, $id){
        $this->menuService->update($request, $id);
        return redirect()->back();
    }

    public function destroy($id){
        $this->menuService->delete($id);
        return redirect()->back();
    }
}
