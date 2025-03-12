<?php 
namespace App\Helpers;
class Helper {
    public static function menu($menus, $parent_id = 0, $char = '') {

        
        $html = '';
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                <tr>
                    <td>' . $menu->id .'</td>
                    <td>' . $char . $menu->name . '</td>

                    <td>' . ($menu->active ? 'Hiển thị' : 'Ẩn') . '</td>
                    <td>' . $menu->updated_at . '</td>
                    <td>
                        <a href="edit/'.$menu->id.'"><i class="mdi mdi-table-edit"></i></a>
                    </td>                    
                    <td>
                        <a href="#" onclick="removeRow('.$menu->id.' , \' /shop/public/admin/menu/destroy \')"><i class="mdi mdi-table-remove"></i></a>
                    </td>
                </tr>
                ';
                // Gọi đệ quy để lấy menu con
                $html .= self::menu($menus, $menu->id, $char .  $menu->name.'-->');
            }
        }

        return $html;
    }
}
