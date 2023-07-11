<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Seeder
        $user = User::create([
            'name' => 'Igor Batista', 
            'email' => 'igor.batista@edu.mt.gov.br',
            'password' => bcrypt('senha123')
        ]);
      
        $role = Role::create(['name' => 'Admin']);

       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
        
        // $role = Role::create(['name' => 'drealtafloresta']);
        // $role = Role::create(['name' => 'drebarradogarcas']);
        // $role = Role::create(['name' => 'drecaceres']);
        // $role = Role::create(['name' => 'dreconfresa']);
        // $role = Role::create(['name' => 'drecuiaba']);
        // $role = Role::create(['name' => 'drevarzeagrande']);
        // $role = Role::create(['name' => 'drediamantino']);
        // $role = Role::create(['name' => 'drejuina']);
        // $role = Role::create(['name' => 'drematupa']);
        // $role = Role::create(['name' => 'dreponteselacerda']);
        // $role = Role::create(['name' => 'dreprimaveradoleste']);
        // $role = Role::create(['name' => 'drerondonopolis']);
        // $role = Role::create(['name' => 'dresinop']);
        // $role = Role::create(['name' => 'dretangaradaserra']);
        $user->assignRole([$role->id]);
    }
}