<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsAndRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = User::find(1);
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'all']);

        $user->assignRole('admin');
        $role->givePermissionTo($permission);
    }
}
