<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Semilla de las Categorias
        
        $c = new Category;
        $c->name = 'Clothes';
        $c->taxes = 21;
        $c->save();
        
        $c = new Category;
        $c->name = 'Vehicles';
        $c->taxes = 21;
        $c->save();
        
        $c = new Category;
        $c->name = 'Accesories';
        $c->taxes = 21;
        $c->save();
        
        $c = new Category;
        $c->name = 'Supplements';
        $c->taxes = 4;
        $c->save();
        
    }
}
