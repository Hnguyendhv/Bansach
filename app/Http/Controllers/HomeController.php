<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuServices;
use App\Http\Services\Product\ProductServices;
class HomeController extends Controller
{
    protected $menuServices;
    protected $ProductServices;
    
    public function __construct(MenuServices $menuServices,ProductServices $ProductServices){
        $this -> menuServices = $menuServices;
        $this -> ProductServices = $ProductServices;

    }



    public function index()
    {
        return view('home',[
            'page' => 'home',
            'title' => ' Danh sách Mục Mới nhất',
            'menus' => $this->menuServices->getAll(),
            'prodh' => $this->ProductServices->prodh(),
            'prodc' => $this->ProductServices->prodc(),
            'prodl' => $this->ProductServices->prodl()


        ]);

    }
}
