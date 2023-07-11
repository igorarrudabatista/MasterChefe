<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            //perfis
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',      
            //Usuários
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',             
            //escola
            'escola-list',
            'escola-create',
            'escola-edit',
            'escola-delete',
            //aluno
            'aluno-list',
            'aluno-create',
            'aluno-edit',
            'aluno-delete',
            // //inscricao
            // 'inscricao-list',
            // 'inscricao-create',
            // 'inscricao-edit',
            // 'inscricao-delete',
            //dre
            'dre-list',
            'dre-create',
            'dre-edit',
            'dre-delete',
            //estado
            'estado-list',
            'estado-create',
            'estado-edit',
            'estado-delete',
            //cidade
            'cidade-list',
            'cidade-create',
            'cidade-edit',
            'cidade-delete',
            //catingrediente
            'catingrediente-list',
            'catingrediente-create',
            'catingrediente-edit',
            'catingrediente-delete',
            // //ingrediente
            // 'ingrediente-list',
            // 'ingrediente-create',
            // 'ingrediente-edit',
            // 'ingrediente-delete',
            //insumo
            'insumo-list',
            'insumo-create',
            'insumo-edit',
            'insumo-delete',            
            //produto
            'produto-list',
            'produto-create',
            'produto-edit',
            'produto-delete',
             ///recibos  são as incrições 
             'recibo-list',
             'recibo-create',
             'recibo-edit',
             'recibo-delete',
             'recibo-invoice',
            
        ];
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}