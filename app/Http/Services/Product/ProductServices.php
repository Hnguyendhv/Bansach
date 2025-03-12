<?php

namespace App\Http\Services\Product;
use App\Models\Product;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;
class ProductServices {
    
    public function getMenu(){
        return Menu::orderByDesc('id')->paginate(20);
    }
    public function getAll(){
        return Product::orderByDesc('id')->paginate(20);
    }
    public function prodh(){
        return Product::where('menu_id',10)->orderByDesc('id')->paginate(4);
    }
    public function prodc(){
        return Product::where('menu_id',11)->orderByDesc('id')->paginate(4);
    }
    public function prodl(){
        return Product::where('menu_id',12)->orderByDesc('id')->paginate(4);
    }
    public function getParent(){
        return Product::where('menu_id',0)->get();
    }
    public function create(array $data) {
        try {
            Product::create([
                'name'        => (string) ($data['name'] ?? ''),
                'description' => (string) ($data['description'] ?? ''),
                'content'     => (string) ($data['content'] ?? ''),
                'menu_id'     => (int) ($data['menu_id'] ?? 0),
                'price'       => (float) ($data['price'] ?? 0),
                'price_sale'  => (float) ($data['price_sale'] ?? 0),
                'active'      => (int) ($data['active'] ?? 0),
                'thumb'       => (string) ($data['thumb'] ?? '')
            ]);

            Session::flash('success', 'Tạo danh mục thành công');
            return true;

        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }
    public function update($request, $product): bool
    {
        try {
            // Kiểm tra và cập nhật dữ liệu
            $product->menu_id = $request->filled('menu_id') ? (int) $request->input('menu_id') : $product->menu_id;
            $product->name = (string) $request->input('name', $product->name);
            $product->description = (string) $request->input('description', $product->description);
            $product->content = (string) $request->input('content', $product->content);
            $product->price = $request->filled('price') ? (float) $request->input('price') : $product->price;
            $product->price_sale = $request->filled('price_sale') ? (float) $request->input('price_sale') : $product->price_sale;
            $product->active = (int) $request->input('active', $product->active);
    
            // Nếu có ảnh mới, cập nhật ảnh
            if ($request->hasFile('thumb')) {
                $filePath = $request->file('thumb')->store('public/images');
                $product->thumb = str_replace('public/', 'storage/', $filePath);
            }
    
            // Lưu sản phẩm
            $product->save();
    
            Session::flash('success', 'Cập nhật sản phẩm thành công');
            return true;
        } catch (\Exception $e) {
            Session::flash('error', 'Lỗi khi cập nhật: ' . $e->getMessage());
            return false;
        }
    }
    public function delete($request){
        $product = Product::where('id',$request->input('id'))->first();
        if($product){
            $product->delete();
            return true;
        }
        return false;
    }
}

