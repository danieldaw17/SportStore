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
        
        $s = new Stock();
        $s->amount = 70;
        $s->size = 'S';
        $s->productId = 1;
        $s->save();

        $s = new Stock();
        $s->amount = 30;
        $s->size = 'L';
        $s->productId = 1;
        $s->save();

        $s = new Stock();
        $s->amount = 43;
        $s->size = 'XL';
        $s->productId = 1;
        $s->save();

        $s = new Stock();
        $s->amount =123;
        $s->size = 'XXL';
        $s->productId = 1;
        $s->save();
        
        $s = new Stock();
        $s->amount = 87;
        $s->size = 'XS';
        $s->productId = 1;
        $s->save();

        $s = new Stock();
        $s->amount = 39;
        $s->size = 'M';
        $s->productId = 1;
        $s->save();

        $s = new Stock();
        $s->amount = 134;
        $s->size = 'XL';
        $s->productId = 2;
        $s->save();

        $s = new Stock();
        $s->amount = 22;
        $s->size = 'L';
        $s->productId = 2;
        $s->save();

        $s = new Stock();
        $s->amount = 70;
        $s->size = 'XXL';
        $s->productId = 2;
        $s->save();

        
        $s = new Stock();
        $s->amount = 66;
        $s->size = 'S';
        $s->productId = 2;
        $s->save();

        $s = new Stock();
        $s->amount = 87;
        $s->size = 'M';
        $s->productId = 2;
        $s->save();

        $s = new Stock();
        $s->amount = 230;
        $s->size = 'XS';
        $s->productId = 2;
        $s->save();
        
        $s = new Stock();
        $s->amount = 2;
        $s->size = 'XL';
        $s->productId = 3;
        $s->save();
        
        $s = new Stock();
        $s->amount = 10;
        $s->size = 'L';
        $s->productId = 3;
        $s->save();
        
        $s = new Stock();
        $s->amount = 50;
        $s->size = 'S';
        $s->productId = 3;
        $s->save();
        
        $s = new Stock();
        $s->amount = 20;
        $s->size = 'XS';
        $s->productId = 3;
        $s->save();
        
        $s = new Stock();
        $s->amount = 86;
        $s->size = 'XXL';
        $s->productId = 4;
        $s->save();
        
        $s = new Stock();
        $s->amount = 56;
        $s->size = 'XL';
        $s->productId = 4;
        $s->save();
        
        $s = new Stock();
        $s->amount = 26;
        $s->size = 'L';
        $s->productId = 4;
        $s->save();
        
        $s = new Stock();
        $s->amount = 20;
        $s->size = 'L';
        $s->productId = 5;
        $s->save();
        
        $s = new Stock();
        $s->amount = 35;
        $s->size = 'S';
        $s->productId = 5;
        $s->save();
        
        $s = new Stock();
        $s->amount = 230;
        $s->size = 'XS';
        $s->productId = 5;
        $s->save();
        
        $s = new Stock();
        $s->amount = 20;
        $s->size = 'L';
        $s->productId = 6;
        $s->save();
        
        $s = new Stock();
        $s->amount = 18;
        $s->size = 'S';
        $s->productId = 6;
        $s->save();
        
        $s = new Stock();
        $s->amount = 120;
        $s->size = 'S';
        $s->productId = 7;
        $s->save();
        
        $s = new Stock();
        $s->amount = 50;
        $s->size = 'XS';
        $s->productId = 7;
        $s->save();
        
        $s = new Stock();
        $s->amount = 130;
        $s->size = 'L';
        $s->productId = 8;
        $s->save();
        
        $s = new Stock();
        $s->amount = 35;
        $s->size = 'M';
        $s->productId = 8;
        $s->save();
        
        $s = new Stock();
        $s->amount = 20;
        $s->size = 'S';
        $s->productId = 8;
        $s->save();
        
        $s = new Stock();
        $s->amount = 25;
        $s->size = 'XL';
        $s->productId = 9;
        $s->save();
        
        $s = new Stock();
        $s->amount = 130;
        $s->size = 'L';
        $s->productId = 9;
        $s->save();
        
        $s = new Stock();
        $s->amount = 20;
        $s->size = 'M';
        $s->productId = 9;
        $s->save();
        
        $s = new Stock();
        $s->amount = 130;
        $s->size = 'S';
        $s->productId = 9;
        $s->save();
        
        $s = new Stock();
        $s->amount = 4;
        $s->size = 'L';
        $s->productId = 10;
        $s->save();
        
        $s = new Stock();
        $s->amount = 18;
        $s->size = 'M';
        $s->productId = 10;
        $s->save();
        
        $s = new Stock();
        $s->amount = 30;
        $s->size = 'S';
        $s->productId = 10;
        $s->save();
        
        $s = new Stock();
        $s->amount = 40;
        $s->size = 'L';
        $s->productId = 11;
        $s->save();
        
        $s = new Stock();
        $s->amount = 30;
        $s->size = 'M';
        $s->productId = 11;
        $s->save();
        
        $s = new Stock();
        $s->amount = 30;
        $s->size = 'L';
        $s->productId = 12;
        $s->save();
        
        $s = new Stock();
        $s->amount = 25;
        $s->size = 'M';
        $s->productId = 12;
        $s->save();
        
        $s = new Stock();
        $s->amount = 23;
        $s->size = 'S';
        $s->productId = 12;
        $s->save();
        
        $s = new Stock();
        $s->amount = 23;
        $s->size = 'S';
        $s->productId = 12;
        $s->save();
        
        $s = new Stock();
        $s->amount = 29;
        $s->size = 'XXS';
        $s->productId = 13;
        $s->save();
        
        $s = new Stock();
        $s->amount = 23;
        $s->size = 'XSS';
        $s->productId = 14;
        $s->save();
        
        $s = new Stock();
        $s->amount = 28;
        $s->size = 'XSS';
        $s->productId = 15;
        $s->save();
        
        $s = new Stock();
        $s->amount = 50;
        $s->size = 'L';
        $s->productId = 16;
        $s->save();
        
        $s = new Stock();
        $s->amount = 80;
        $s->size = 'M';
        $s->productId = 16;
        $s->save();
        
        $s = new Stock();
        $s->amount = 70;
        $s->size = 'L';
        $s->productId = 17;
        $s->save();
        
        $s = new Stock();
        $s->amount = 80;
        $s->size = 'M';
        $s->productId = 17;
        $s->save();
        
        $s = new Stock();
        $s->amount = 23;
        $s->size = 'M';
        $s->productId = 17;
        $s->save();
        
        $s = new Stock();
        $s->amount = 23;
        $s->size = 'XSS';
        $s->productId = 18;
        $s->save();
        
        $s = new Stock();
        $s->amount = 23;
        $s->size = 'XSS';
        $s->productId = 19;
        $s->save();
        
        $s = new Stock();
        $s->amount = 50;
        $s->size = 'L';
        $s->productId = 20;
        $s->save();
        
        $s = new Stock();
        $s->amount = 30;
        $s->size = 'XL';
        $s->productId = 20;
        $s->save();
        
        $s = new Stock();
        $s->amount = 45;
        $s->size = 'M';
        $s->productId = 21;
        $s->save();
        
        $s = new Stock();
        $s->amount = 35;
        $s->size = 'S';
        $s->productId = 21;
        $s->save();
        
        $s = new Stock();
        $s->amount = 53;
        $s->size = 'L';
        $s->productId = 22;
        $s->save();
        
        $s = new Stock();
        $s->amount = 28;
        $s->size = 'M';
        $s->productId = 22;
        $s->save();
        
        $s = new Stock();
        $s->amount = 252;
        $s->size = 'XSS';
        $s->productId = 23;
        $s->save();
        
        $s = new Stock();
        $s->amount = 23;
        $s->size = 'XSS';
        $s->productId = 24;
        $s->save();
        
        $s = new Stock();
        $s->amount = 63;
        $s->size = 'XSS';
        $s->productId = 25;
        $s->save();
        
        $s = new Stock();
        $s->amount = 32;
        $s->size = 'XSS';
        $s->productId = 26;
        $s->save();
        
        $s = new Stock();
        $s->amount = 36;
        $s->size = 'XSS';
        $s->productId = 27;
        $s->save();
        
        $s = new Stock();
        $s->amount = 65;
        $s->size = 'XSS';
        $s->productId = 28;
        $s->save();
        
        $s = new Stock();
        $s->amount = 74;
        $s->size = 'XSS';
        $s->productId = 29;
        $s->save();
        
        $s = new Stock();
        $s->amount = 32;
        $s->size = 'XSS';
        $s->productId = 30;
        $s->save();
        
        $s = new Stock();
        $s->amount = 52;
        $s->size = 'XSS';
        $s->productId = 31;
        $s->save();
        
        $s = new Stock();
        $s->amount = 62;
        $s->size = 'XSS';
        $s->productId = 31;
        $s->save();
        
        $s = new Stock();
        $s->amount = 35;
        $s->size = 'XSS';
        $s->productId = 32;
        $s->save();
        
        $s = new Stock();
        $s->amount = 56;
        $s->size = 'XSS';
        $s->productId = 33;
        $s->save();
        
        $s = new Stock();
        $s->amount = 42;
        $s->size = 'XSS';
        $s->productId = 34;
        $s->save();
        
        $s = new Stock();
        $s->amount = 51;
        $s->size = 'XSS';
        $s->productId = 35;
        $s->save();
        
        $s = new Stock();
        $s->amount = 73;
        $s->size = 'XSS';
        $s->productId = 36;
        $s->save();
        
        $s = new Stock();
        $s->amount = 97;
        $s->size = 'XSS';
        $s->productId = 37;
        $s->save();
    }
}