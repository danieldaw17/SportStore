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
        $s->imagePath= '/storage/images/subcategories/1.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Sweatshirts';
        $s->categoryId = 1;
        $s->imagePath= '/storage/images/subcategories/2.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Socks';
        $s->categoryId = 1;
        $s->imagePath= '/storage/images/subcategories/3.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Sneakers';
        $s->categoryId = 1;
        $s->imagePath= '/storage/images/subcategories/4.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Trousers';
        $s->categoryId = 1;
        $s->imagePath= '/storage/images/subcategories/5.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Swimsuits';
        $s->categoryId = 1;
        $s->imagePath= '/storage/images/subcategories/6.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Bicycle';
        $s->categoryId = 2;
        $s->imagePath= '/storage/images/subcategories/7.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Scooter';
        $s->categoryId = 2;
        $s->imagePath= '/storage/images/subcategories/8.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Skate';
        $s->categoryId = 2;
        $s->imagePath= '/storage/images/subcategories/9.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Gloves';
        $s->categoryId = 3;
        $s->imagePath= '/storage/images/subcategories/10.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Glasses';
        $s->categoryId = 3;
        $s->imagePath= '/storage/images/subcategories/11.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Helmets';
        $s->categoryId = 3;
        $s->imagePath= '/storage/images/subcategories/12.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Protectors';
        $s->categoryId = 3;
        $s->imagePath= '/storage/images/subcategories/13.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Balls';
        $s->categoryId = 3;
        $s->imagePath= '/storage/images/subcategories/14.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Proteins';
        $s->categoryId = 4;
        $s->imagePath= '/storage/images/subcategories/15.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Muscle gain';
        $s->categoryId = 4;
        $s->imagePath= '/storage/images/subcategories/16.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Complement';
        $s->categoryId = 4;
        $s->imagePath= '/storage/images/subcategories/17.jpg';
        $s->save();

        $s = new Sub_category;
        $s->name = 'Weight control';
        $s->categoryId = 4;
        $s->imagePath= '/storage/images/subcategories/18.jpg';
        $s->save();
    }
}
