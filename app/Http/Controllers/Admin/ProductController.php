<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductServices;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    protected $productServices;
    protected $menuServices;
    public function __construct(ProductServices $productServices){
        $this -> productServices = $productServices;
    }
    
    // public function index(){
    //     return view('admin.product.list',[
    //         'title' => ' Danh sách sản phẩm',
    //         'products' => $this->productServices->getAll()
    //     ]);
    // }
    public function index(){
        $products = Product::simplePaginate(3);
        return view('admin.product.list',[
            'title' => ' Danh sách sản phẩm',
            'products' => $products
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.product.add',[
            'title' => 'Thêm Sản phẩm',
            'menus' => $this->productServices->getMenu()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add(Request $request)
    {
        // Lấy tất cả dữ liệu từ request
        $data = $request->all();
    
        // Kiểm tra nếu có file được tải lên
        if ($request->hasFile('thumb')) {
            $filePath = $request->file('thumb')->store('public/images');
            $data['thumb'] = str_replace('public/', 'storage/', $filePath);
        }
    
        // Gọi service để lưu vào database
        $this->productServices->create($data);
    
        return redirect()->back()->with('success', 'Thêm sản phẩm thành công!');
    }
    
        
    

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.edit',[
            'title' => 'chỉnh sửa sản phẩm',
            'product' => $product,
            'menus' => $this->productServices->getMenu()

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Product $product, Request $request){
        $this->productServices->update($request,$product);
        return redirect('/admin/products/list');
    }

    /**
     * Update the specified resource in storage.
     */
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this -> productServices->delete($request);
        if($result){
            return response()-> json([
                'error' => false,
                'message' => 'xóa thành công sản phẩm'
            ]);
        }
        return response()-> json(['error' => true]);
    }
}
