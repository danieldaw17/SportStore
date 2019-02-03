<?php

use Illuminate\Database\Seeder;
use App\Sub_category;

class Sub_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Semilla de subcategorias
        
        $s = new Sub_category;
        $s->name = 'T-shirts';
        $s->categoryId = 1;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Sweatshirts';
        $s->categoryId = 1;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Socks';
        $s->categoryId = 1;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Sneakers';
        $s->categoryId = 1;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Trousers';
        $s->categoryId = 1;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Swimsuits';
        $s->categoryId = 1;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Bicycle';
        $s->categoryId = 2;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Scooter';
        $s->categoryId = 2;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Skate';
        $s->categoryId = 2;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Gloves';
        $s->categoryId = 3;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Glasses';
        $s->categoryId = 3;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Helmets';
        $s->categoryId = 3;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Protectors';
        $s->categoryId = 3;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Balls';
        $s->categoryId = 3;
        $s->save();
        //14-15-16-17
        $s = new Sub_category;
        $s->name = 'Proteins';
        $s->categoryId = 4;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Muscle gain';
        $s->categoryId = 4;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Complement';
        $s->categoryId = 4;
        $s->save();
        
        $s = new Sub_category;
        $s->name = 'Weight control';
        $s->categoryId = 4;
        $s->save();
    }
}
