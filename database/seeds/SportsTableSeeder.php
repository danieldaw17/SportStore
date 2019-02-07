<?php

use Illuminate\Database\Seeder;
use App\Sport;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Semilla de Deportes
        
        $s = new Sport;
        $s->name = 'Football';
        $s->imagePath = '/public/storage/images/sports/1.jpg';
        $s->save();
        
        $s = new Sport;
        $s->name = 'Baloncesto';
        $s->imagePath = '/public/storage/images/sports/2.jpg';
        $s->save();
        
        $s = new Sport;
        $s->name = 'Natacion';
        $s->imagePath = '/public/storage/images/sports/3.jpg';
        $s->save();
        
        $s = new Sport;
        $s->name = 'Tennis';
        $s->imagePath = '/public/storage/images/sports/4.jpg';
        $s->save();
        
        $s = new Sport;
        $s->name = 'Gymnastics';
        $s->imagePath = '/public/storage/images/sports/5.jpg';
        $s->save();
        
        $s = new Sport;
        $s->name = 'Cycling';
        $s->imagePath = '/public/storage/images/sports/6.jpg';
        $s->save();
        
        $s = new Sport;
        $s->name = 'Skateboarding';
        $s->imagePath = '/public/storage/images/sports/7.jpg';
        $s->save();
        
        $s = new Sport;
        $s->name = 'Fisicoculturismo';
        $s->imagePath = '/public/storage/images/sports/8.jpg';
        $s->save();
    }
}
