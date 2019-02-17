<?php

//namespace App\Http\Controllers;
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

        $c = new Category();
        $c->name = 'Clothes';
        $c->imagePath = '/storage/images/categories/1.jpg';
        $c->taxes = 21;
        $c->save();

        $c = new Category();
        $c->name = 'Vehicles';
        $c->imagePath = '/storage/images/categories/2.jpg';
        $c->taxes = 21;
        $c->save();

        $c = new Category();
        $c->name = 'Accesories';
        $c->imagePath = '/storage/images/categories/3.jpg';
        $c->taxes = 21;
        $c->save();

        $c = new Category();
        $c->name = 'Supplements';
        $c->taxes = 4;
        $c->imagePath = '/storage/images/categories/4.jpg';
        $c->save();

    }
}
