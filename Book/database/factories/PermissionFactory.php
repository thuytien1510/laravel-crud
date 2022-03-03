<?php

namespace Database\Factories;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $permissions = [
        //     'role-list',
        //     'role-create',
        //     'role-edit',
        //     'role-delete'
        //  ];

        //  foreach ($permissions as $permission) {
        //      return
        //       Permission::create([
        //           'name' => $permission,
        //             'slug' => $permission
        //         ]);
        //  }

        //  DB::table('permissions')->insert([
        //     ['name' => 'Xem quyền', 'slug' => 'view-permission',],
        //     ['name' => 'Tạo mới quyền', 'slug' => 'create-permission',],
        //     ['name' => 'Sửa quyền','slug' => 'edit-permission', ],
        //     ['name' => 'Cập nhật quyền', 'slug' => 'update-permission'],
        //     ['name' => 'Xóa quyền', 'slug' => 'delete-permission',]
        //  ]);

        //  DB::table('roles')->insert([
        //     ['name'=>'Super admin','slug'=>'SUPER ADMIN'],
        //     ['name'=>'admin','slug'=>'ADMIN'],
        //     ['name'=>'Nhân viên','slug'=>'EMPLOYEE'],
        //     ['name'=>'Nguời dùng','slug'=>'USER']
        //     ,
        // ]);
        // for($i=1;$i<36;$i++){
        //     DB::table('role_permission')->insert([
        //         ['role_id'=>1,'permission_id'=>$i],
        //     ]);
        // }
        // $
        // return [
        //     'name' => $name,
        //     'slug' => $slug
        // ];
    }
}
