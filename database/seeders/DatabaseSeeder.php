<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
            $categoria->name = 'Cliente';
            $categoria->save();
        $categoria = new Categoria();
            $categoria->name = 'Proveedor';
            $categoria->save();
        $categoria = new Categoria();
            $categoria->name = 'Funcionario Interno';
            $categoria->save();
        
        \App\Models\User::factory(20)->create();
        
    }
}
