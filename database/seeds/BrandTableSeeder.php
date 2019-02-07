<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Semilla de Marcas
        
        $b = new Brand;
        $b->name='Nike';
        $b->save();
        
        $b = new Brand;
        $b->name='Adidas';
        $b->save();
        
        $b = new Brand;
        $b->name='Kipsta';
        $b->save();
        
        $b = new Brand;
        $b->name='Tarmak';
        $b->save();
        
        $b = new Brand;
        $b->name='Domyos';
        $b->save();
        
        $b = new Brand;
        $b->name='Oxelo';
        $b->save();
        
        $b = new Brand;
        $b->name='Artengo';
        $b->save();
        
        $b = new Brand;
        $b->name='Btwin';
        $b->save();
        
        $b = new Brand;
        $b->name='Nabaiji';
        $b->save();

        $b = new Brand;
        $b->name='HSN';
        $b->save();
    }
}
