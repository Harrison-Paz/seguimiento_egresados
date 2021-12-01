<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);        
        $role2 = Role::create(['name' => 'Secretaria']);
        $role3 = Role::create(['name' => 'Egresado']);

        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'agregar-egresados'])->assignRole($role2);
        Permission::create(['name' => 'listar-egresados'])->assignRole($role2);
        Permission::create(['name' => 'editar-egresados'])->assignRole($role2);

        Permission::create(['name' => 'listar-usuario'])->assignRole($role1);
        Permission::create(['name' => 'agregar-usuario'])->assignRole($role1);

        Permission::create(['name' => 'listar-oferta'])->assignRole($role3);

    }
}
 