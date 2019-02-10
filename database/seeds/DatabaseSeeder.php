<?php

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
        //Elimina los datos de las tablas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::table('sub_categories')->truncate();
        DB::table('sports')->truncate();
        DB::table('brands')->truncate();
        DB::table('products')->truncate();
        DB::table('images')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        //Llama a las semillas
        //Model::unguard();
        $this->call(CategoriesTableSeeder::class);
        $this->call(Sub_categoriesTableSeeder::class);
        $this->call(SportsTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
		$this->call(UsersTableSeeder::class);
        //Model::reguard();

    }
}
