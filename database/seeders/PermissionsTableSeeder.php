<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'inventory_access',
            ],
            [
                'id'    => 18,
                'title' => 'add_stock_create',
            ],
            [
                'id'    => 19,
                'title' => 'add_stock_edit',
            ],
            [
                'id'    => 20,
                'title' => 'add_stock_show',
            ],
            [
                'id'    => 21,
                'title' => 'add_stock_delete',
            ],
            [
                'id'    => 22,
                'title' => 'add_stock_access',
            ],
            [
                'id'    => 23,
                'title' => 'remove_stock_create',
            ],
            [
                'id'    => 24,
                'title' => 'remove_stock_edit',
            ],
            [
                'id'    => 25,
                'title' => 'remove_stock_show',
            ],
            [
                'id'    => 26,
                'title' => 'remove_stock_delete',
            ],
            [
                'id'    => 27,
                'title' => 'remove_stock_access',
            ],
            [
                'id'    => 28,
                'title' => 'available_stock_create',
            ],
            [
                'id'    => 29,
                'title' => 'available_stock_edit',
            ],
            [
                'id'    => 30,
                'title' => 'available_stock_show',
            ],
            [
                'id'    => 31,
                'title' => 'available_stock_delete',
            ],
            [
                'id'    => 32,
                'title' => 'available_stock_access',
            ],
            [
                'id'    => 33,
                'title' => 'report_access',
            ],
            [
                'id'    => 34,
                'title' => 'stock_out_create',
            ],
            [
                'id'    => 35,
                'title' => 'stock_out_edit',
            ],
            [
                'id'    => 36,
                'title' => 'stock_out_show',
            ],
            [
                'id'    => 37,
                'title' => 'stock_out_delete',
            ],
            [
                'id'    => 38,
                'title' => 'stock_out_access',
            ],
            [
                'id'    => 39,
                'title' => 'purchase_create',
            ],
            [
                'id'    => 40,
                'title' => 'purchase_edit',
            ],
            [
                'id'    => 41,
                'title' => 'purchase_show',
            ],
            [
                'id'    => 42,
                'title' => 'purchase_delete',
            ],
            [
                'id'    => 43,
                'title' => 'purchase_access',
            ],
            [
                'id'    => 44,
                'title' => 'product_create',
            ],
            [
                'id'    => 45,
                'title' => 'product_edit',
            ],
            [
                'id'    => 46,
                'title' => 'product_show',
            ],
            [
                'id'    => 47,
                'title' => 'product_delete',
            ],
            [
                'id'    => 48,
                'title' => 'product_access',
            ],
            [
                'id'    => 49,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
