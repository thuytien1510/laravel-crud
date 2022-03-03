<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Permission::class, 10)->create();
        // Permission::factory()->count(10)->create();
        DB::table('permissions')->insert([
            ['name' => 'Xem quyền', 'slug' => 'view-permission',],
            ['name' => 'Tạo mới quyền', 'slug' => 'create-permission',],
            ['name' => 'Sửa quyền','slug' => 'edit-permission', ],
            ['name' => 'Cập nhật quyền', 'slug' => 'update-permission'],
            ['name' => 'Xóa quyền', 'slug' => 'delete-permission',]
         ]);

         DB::table('roles')->insert([
            ['name'=>'Super admin','slug'=>'SUPER ADMIN'],
            ['name'=>'admin','slug'=>'ADMIN'],
            ['name'=>'Nhân viên','slug'=>'EMPLOYEE'],
            ['name'=>'Nguời dùng','slug'=>'USER']
            ,
        ]);
        for($i=1;$i<36;$i++){
            DB::table('role_permission')->insert([
                ['role_id'=>1,'permission_id'=>$i],
            ]);
        }
    }
}
