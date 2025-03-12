<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuServices;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    protected $menuServices;
    
    public function __construct(MenuServices $menuServices){
        $this -> menuServices = $menuServices;
    }

    public function create(){
        return view('admin.menu.add',[
            'title' => 'Thêm Danh Mục Mới',
            'menus' => $this->menuServices->getParent()
        ]);
    }

    public function store(CreateFormRequest $request){
        $result = $this->menuServices->create($request);
        return redirect()->back();
    }

    public function index(){
        
        return view('admin.menu.list',[
            'title' => ' Danh sách Mục Mới nhất',
            'menus' => $this->menuServices->getAll()
        ]);
    }

    public function show(Menu $menu){
        return view('admin.menu.edit',[
            'title' => ' Chỉnh sửa danh Mục '.$menu->name,
            'menu' => $menu,
            'menus' => $this->menuServices->getParent()

        ]);
    }
    public function update(Menu $menu, CreateFormRequest $request){
        $this->menuServices->update($request,$menu);
        return redirect('/admin/menu/list');
    }

    public function destroy(Request $request){
        $result = $this->menuServices->destroy($request);
        if($result){
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
