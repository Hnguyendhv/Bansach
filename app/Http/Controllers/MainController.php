<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductServices;
class MainController extends Controller
{
    protected $menuServices;
    protected $ProductServices;
    public function index(){
        return view('main',[
            'title' => 'Bán sách',
            'menus' => $this->menuServices->getAll(),
            'products' => $this->ProductServices->prodh()
        ]);
    }
}
