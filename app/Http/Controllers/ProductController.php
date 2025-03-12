<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductServices;
use App\Http\Services\Menu\MenuServices;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{    protected $menuServices;
    protected $ProductServices;
    
    public function __construct(MenuServices $menuServices,ProductServices $ProductServices){
        $this -> menuServices = $menuServices;
        $this -> ProductServices = $ProductServices;

    }


    public function index()
    {
        return view('products',[
            'page' => 'products',
            'title' => ' Danh sách sản phẩm',
            'products' => $this->ProductServices->getAll(),
            'menus' => $this->menuServices->getParent(),
            'ids' => $this->menuServices->getAll()


        ]);

    }
    public function show(Product $id)
    {
 
        return view('product',[
            'page' => 'product',
            'title' => ' Hiển thị sản phẩm',
            'product' => $id


        ]);

    }
}
