<?php

use Illuminate\Database\Seeder;
use App\Delivery;
class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = new Delivery();
        $d->name = 'SEUR';
        $d->hoursMax= 50;
        $d->price = 10;
        $d->save();

        $d = new Delivery();
        $d->name = 'UPS';
        $d->hoursMax = 80;
        $d->price = 5;
        $d->save();
    }
}
