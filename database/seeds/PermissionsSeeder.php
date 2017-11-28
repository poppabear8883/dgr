<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    private $roles = [
        'owner',
        'admin',
        'team',
        'vendor',
        'client',
        'user'
    ];

    private $permissions = [
        'view',
        'edit',
        'create',
        'delete'
    ];

    private $tables = [
        'users',
        'profiles',
        'permissions',
        'roles',
        'galleries'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedRoles();
        $this->seedPermissions();

        $role = Role::findByName('owner');

        $permissions = Permission::all();

        foreach ($permissions as $perm) {
            $role->givePermissionTo($perm);
        }
    }

    private function seedRoles()
    {
        foreach ($this->roles as $role) {
            Role::create(['name' => $role]);
        }
    }

    private function seedPermissions()
    {
        foreach ($this->permissions as $permission) {
            foreach ($this->tables as $model) {
                Permission::create(['name' => $permission . ' ' . $model]);
            }
        }
    }
}
