<?php

use Illuminate\Database\Seeder;
use App\Stock;
class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $c = new Stock();
        $c->amount = 70;
        $c->size = 'S';
        $c->productId = 1;
        $c->save();

         $c = new Stock();
        $c->amount = 30;
        $c->size = 'L';
        $c->productId = 1;
        $c->save();

         $c = new Stock();
        $c->amount = 43;
        $c->size = 'XL';
        $c->productId = 1;
        $c->save();

         $c = new Stock();
        $c->amount =123;
        $c->size = 'XXL';
        $c->productId = 1;
        $c->save();
        
         $c = new Stock();
        $c->amount = 87;
        $c->size = 'XS';
        $c->productId = 1;
        $c->save();

         $c = new Stock();
        $c->amount = 39;
        $c->size = 'M';
        $c->productId = 1;
        $c->save();

         $c = new Stock();
        $c->amount = 134;
        $c->size = 'XL';
        $c->productId = 2;
        $c->save();

         $c = new Stock();
        $c->amount = 22;
        $c->size = 'L';
        $c->productId = 2;
        $c->save();

         $c = new Stock();
        $c->amount = 70;
        $c->size = 'XXL';
        $c->productId = 2;
        $c->save();

        $
         $c = new Stock();
        $c->amount = 66;
        $c->size = 'S';
        $c->productId = 2;
        $c->save();

         $c = new Stock();
        $c->amount = 87;
        $c->size = 'M';
        $c->productId = 2;
        $c->save();

         $c = new Stock();
        $c->amount = 230;
        $c->size = 'XS';
        $c->productId = 2;
        $c->save();
    }
}
