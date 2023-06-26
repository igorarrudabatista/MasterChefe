<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Produto;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Seeder
        $user = Produto::create([
            'Nome' => 'Cebolinhas', 
            'cat_ingredientes_id' => '1',
            'image' => '823754f8df53829dc642273ade6ac053.jpg'
        ]);
      
       
    }
}