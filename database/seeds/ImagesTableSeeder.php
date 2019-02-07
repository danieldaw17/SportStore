<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Semilla de imagenes
        $i = new Image;
        $i->name = 'camiseta rojo futbol';
        $i->path = 'storage/images/products/1-front.jpg';
        $i->productId = '1';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta rojo futbol';
        $i->path = 'storage/images/products/1-sideL.jpg';
        $i->productId = '1';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta rojo futbol';
        $i->path = 'storage/images/products/1-back.jpg';
        $i->productId = '1';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta rojo futbol';
        $i->path = 'storage/images/products/1-sideR.jpg';
        $i->productId = '1';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta azul futbol';
        $i->path = 'storage/images/products/2-front.jpg';
        $i->productId = '2';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta negro futbol';
        $i->path = 'storage/images/products/3-front.jpg';
        $i->productId = '3';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta negro futbol';
        $i->path = 'storage/images/products/3-back.jpg';
        $i->productId = '3';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta negro futbol';
        $i->path = 'storage/images/products/3-sideL.jpg';
        $i->productId = '3';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta azul tennis';
        $i->path = 'storage/images/products/4-front.jpg';
        $i->productId = '4';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta azul tennis';
        $i->path = 'storage/images/products/4-back.jpg';
        $i->productId = '4';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta blanco tennis';
        $i->path = 'storage/images/products/5-front.jpg';
        $i->productId = '5';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta blanco tennis';
        $i->path = 'storage/images/products/5-back.jpg';
        $i->productId = '5';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta blanco tennis';
        $i->path = 'storage/images/products/5-sideL.jpg';
        $i->productId = '5';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta blanco tennis';
        $i->path = 'storage/images/products/5-sideR.jpg';
        $i->productId = '5';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta baloncesto negro';
        $i->path = 'storage/images/products/6-front.jpg';
        $i->productId = '6';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta baloncesto negro';
        $i->path = 'storage/images/products/6-back.jpg';
        $i->productId = '6';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta baloncesto negro';
        $i->path = 'storage/images/products/6-sideL.jpg';
        $i->productId = '6';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta baloncesto negro';
        $i->path = 'storage/images/products/6-sideR.jpg';
        $i->productId = '6';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta baloncesto azul';
        $i->path = 'storage/images/products/7-front.jpg';
        $i->productId = '7';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta baloncesto azul';
        $i->path = 'storage/images/products/7-back.jpg';
        $i->productId = '7';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta baloncesto azul';
        $i->path = 'storage/images/products/7-sideR.jpg';
        $i->productId = '7';
        $i->save();

        $i = new Image;
        $i->name = 'camiseta baloncesto azul';
        $i->path = 'storage/images/products/7-sideL.jpg';
        $i->productId = '7';
        $i->save();

        $i = new Image;
        $i->name = 'bañador natacion negro';
        $i->path = 'storage/images/products/8-front.jpg';
        $i->productId = '8';
        $i->save();

        $i = new Image;
        $i->name = 'bañador natacion negro';
        $i->path = 'storage/images/products/8-back.jpg';
        $i->productId = '8';
        $i->save();

        $i = new Image;
        $i->name = 'bañador natacion negro';
        $i->path = 'storage/images/products/8-sideL.jpg';
        $i->productId = '8';
        $i->save();

        $i = new Image;
        $i->name = 'sudadera futbol negro';
        $i->path = 'storage/images/products/9-front.jpg';
        $i->productId = '9';
        $i->save();

        $i = new Image;
        $i->name = 'sudadera futbol negro';
        $i->path = 'storage/images/products/9-back.jpg';
        $i->productId = '9';
        $i->save();

        $i = new Image;
        $i->name = 'sudadera gimnasia rosa';
        $i->path = 'storage/images/products/10-front.jpg';
        $i->productId = '10';
        $i->save();

        $i = new Image;
        $i->name = 'sudadera gimnasia rosa';
        $i->path = 'storage/images/products/10-back.jpg';
        $i->productId = '10';
        $i->save();

        $i = new Image;
        $i->name = 'sudadera gimnasia rosa';
        $i->path = 'storage/images/products/10-sideL.jpg';
        $i->productId = '10';
        $i->save();

        $i = new Image;
        $i->name = 'sudadera gimnasia rosa';
        $i->path = 'storage/images/products/10-sideR.jpg';
        $i->productId = '10';
        $i->save();

        $i = new Image;
        $i->name = 'calcetines baloncesto negro';
        $i->path = 'storage/images/products/11-front.jpg';
        $i->productId = '11';
        $i->save();

        $i = new Image;
        $i->name = 'calcetines baloncesto negro';
        $i->path = 'storage/images/products/11-back.jpg';
        $i->productId = '11';
        $i->save();

        $i = new Image;
        $i->name = 'calcetines tennis blanco';
        $i->path = 'storage/images/products/12-front.jpg';
        $i->productId = '12';
        $i->save();

        $i = new Image;
        $i->name = 'calcetines tennis blanco';
        $i->path = 'storage/images/products/12-back.jpg';
        $i->productId = '12';
        $i->save();

        $i = new Image;
        $i->name = 'calcetines tennis blanco';
        $i->path = 'storage/images/products/12-sideR.jpg';
        $i->productId = '12';
        $i->save();

        $i = new Image;
        $i->name = 'zapatillas ciclistas blanco';
        $i->path = 'storage/images/products/13-front.jpg';
        $i->productId = '13';
        $i->save();

        $i = new Image;
        $i->name = 'zapatillas futbol amarillo';
        $i->path = 'storage/images/products/14-front.jpg';
        $i->productId = '14';
        $i->save();

        $i = new Image;
        $i->name = 'zapatillas tennis rosa';
        $i->path = 'storage/images/products/15-front.jpg';
        $i->productId = '15';
        $i->save();

        $i = new Image;
        $i->name = 'zapatillas tennis rosa';
        $i->path = 'storage/images/products/15-back.jpg';
        $i->productId = '15';
        $i->save();

        $i = new Image;
        $i->name = 'pantalones tennis azul';
        $i->path = 'storage/images/products/16-front.jpg';
        $i->productId = '16';
        $i->save();

        $i = new Image;
        $i->name = 'pantalones tennis azul';
        $i->path = 'storage/images/products/16-back.jpg';
        $i->productId = '16';
        $i->save();

        $i = new Image;
        $i->name = 'pantalones baloncesto gris';
        $i->path = 'storage/images/products/17-front.jpg';
        $i->productId = '17';
        $i->save();

        $i = new Image;
        $i->name = 'pantalones baloncesto gris';
        $i->path = 'storage/images/products/17-back.jpg';
        $i->productId = '17';
        $i->save();

        $i = new Image;
        $i->name = 'pantalones baloncesto gris';
        $i->path = 'storage/images/products/17-sideR.jpg';
        $i->productId = '17';
        $i->save();

        $i = new Image;
        $i->name = 'pantalones baloncesto gris';
        $i->path = 'storage/images/products/17-sideL.jpg';
        $i->productId = '17';
        $i->save();

        $i = new Image;
        $i->name = 'Skateboard blanco';
        $i->path = 'storage/images/products/18-front.jpg';
        $i->productId = '18';
        $i->save();

        $i = new Image;
        $i->name = 'Skateboard blanco';
        $i->path = 'storage/images/products/18-back.jpg';
        $i->productId = '18';
        $i->save();

        $i = new Image;
        $i->name = 'Skateboard blanco';
        $i->path = 'storage/images/products/18-sideR.jpg';
        $i->productId = '18';
        $i->save();

        $i = new Image;
        $i->name = 'Skateboard comic';
        $i->path = 'storage/images/products/19-front.jpg';
        $i->productId = '19';
        $i->save();

        $i = new Image;
        $i->name = 'Skateboard comic';
        $i->path = 'storage/images/products/19-back.jpg';
        $i->productId = '19';
        $i->save();

        $i = new Image;
        $i->name = 'Skateboard comic';
        $i->path = 'storage/images/products/19-sideR.jpg';
        $i->productId = '19';
        $i->save();

        $i = new Image;
        $i->name = 'Bicicleta montaña';
        $i->path = 'storage/images/products/20-front.jpg';
        $i->productId = '20';
        $i->save();

        $i = new Image;
        $i->name = 'Bicicleta montaña';
        $i->path = 'storage/images/products/20-back.jpg';
        $i->productId = '20';
        $i->save();

        $i = new Image;
        $i->name = 'Bicicleta montaña';
        $i->path = 'storage/images/products/20-sideR.jpg';
        $i->productId = '20';
        $i->save();

        $i = new Image;
        $i->name = 'Bicicleta carretera';
        $i->path = 'storage/images/products/21-front.jpg';
        $i->productId = '21';
        $i->save();

        $i = new Image;
        $i->name = 'Bicicleta carretera';
        $i->path = 'storage/images/products/21-back.jpg';
        $i->productId = '21';
        $i->save();

        $i = new Image;
        $i->name = 'Bicicleta carretera';
        $i->path = 'storage/images/products/21-sideR.jpg';
        $i->productId = '21';
        $i->save();

        $i = new Image;
        $i->name = 'Patinete amarillo';
        $i->path = 'storage/images/products/22-front.jpg';
        $i->productId = '22';
        $i->save();

        $i = new Image;
        $i->name = 'Patinete amarillo';
        $i->path = 'storage/images/products/22-back.jpg';
        $i->productId = '22';
        $i->save();

        $i = new Image;
        $i->name = 'Patinete amarillo';
        $i->path = 'storage/images/products/22-sideR.jpg';
        $i->productId = '22';
        $i->save();

        $i = new Image;
        $i->name = 'Patinete electrico';
        $i->path = 'storage/images/products/23-front.jpg';
        $i->productId = '23';
        $i->save();

        $i = new Image;
        $i->name = 'Patinete electrico';
        $i->path = 'storage/images/products/23-back.jpg';
        $i->productId = '23';
        $i->save();

        $i = new Image;
        $i->name = 'Patinete electrico';
        $i->path = 'storage/images/products/23-sideR.jpg';
        $i->productId = '23';
        $i->save();

        $i = new Image;
        $i->name = 'Guantes fisicoculturismo gris';
        $i->path = 'storage/images/products/24-front.jpg';
        $i->productId = '24';
        $i->save();

        $i = new Image;
        $i->name = 'Guantes fisicoculturismo gris';
        $i->path = 'storage/images/products/24-back.jpg';
        $i->productId = '24';
        $i->save();

        $i = new Image;
        $i->name = 'Guantes tennis azul';
        $i->path = 'storage/images/products/25-front.jpg';
        $i->productId = '25';
        $i->save();

        $i = new Image;
        $i->name = 'Guantes tennis azul';
        $i->path = 'storage/images/products/25-back.jpg';
        $i->productId = '25';
        $i->save();

        $i = new Image;
        $i->name = 'Gafas ciclismo amarillo';
        $i->path = 'storage/images/products/26-front.jpg';
        $i->productId = '26';
        $i->save();

        $i = new Image;
        $i->name = 'Gafas ciclismo amarillo';
        $i->path = 'storage/images/products/26-back.jpg';
        $i->productId = '26';
        $i->save();

        $i = new Image;
        $i->name = 'Gafas natacion blanco';
        $i->path = 'storage/images/products/27-front.jpg';
        $i->productId = '27';
        $i->save();

        $i = new Image;
        $i->name = 'Casco ciclismo negro';
        $i->path = 'storage/images/products/28-front.jpg';
        $i->productId = '28';
        $i->save();

        $i = new Image;
        $i->name = 'Casco ciclismo blanco';
        $i->path = 'storage/images/products/29-front.jpg';
        $i->productId = '29';
        $i->save();

        $i = new Image;
        $i->name = 'Casco ciclismo blanco';
        $i->path = 'storage/images/products/29-back.jpg';
        $i->productId = '29';
        $i->save();

        $i = new Image;
        $i->name = 'Protector fisicoculturismo negro';
        $i->path = 'storage/images/products/30-front.jpg';
        $i->productId = '30';
        $i->save();

        $i = new Image;
        $i->name = 'Protector fisicoculturismo negro';
        $i->path = 'storage/images/products/30-back.jpg';
        $i->productId = '30';
        $i->save();

        $i = new Image;
        $i->name = 'Protector futbol negro';
        $i->path = 'storage/images/products/31-front.jpg';
        $i->productId = '31';
        $i->save();

        $i = new Image;
        $i->name = 'Protector futbol negro';
        $i->path = 'storage/images/products/31-back.jpg';
        $i->productId = '31';
        $i->save();

        $i = new Image;
        $i->name = 'balon futbol blanco';
        $i->path = 'storage/images/products/32-front.jpg';
        $i->productId = '32';
        $i->save();

        $i = new Image;
        $i->name = 'balon baloncesto naranja';
        $i->path = 'storage/images/products/33-front.jpg';
        $i->productId = '33';
        $i->save();

        $i = new Image;
        $i->name = 'Suplemento Proteinas';
        $i->path = 'storage/images/products/34-front.jpg';
        $i->productId = '34';
        $i->save();

        $i = new Image;
        $i->name = 'Suplemento Proteinas';
        $i->path = 'storage/images/products/34-back.jpg';
        $i->productId = '34';
        $i->save();

        $i = new Image;
        $i->name = 'Suplemento muscular';
        $i->path = 'storage/images/products/35-front.jpg';
        $i->productId = '35';
        $i->save();

        $i = new Image;
        $i->name = 'Suplemento muscular';
        $i->path = 'storage/images/products/35-back.jpg';
        $i->productId = '35';
        $i->save();

        $i = new Image;
        $i->name = 'Suplemento complemento';
        $i->path = 'storage/images/products/36-front.jpg';
        $i->productId = '36';
        $i->save();

        $i = new Image;
        $i->name = 'Suplemento complemento';
        $i->path = 'storage/images/products/36-back.jpg';
        $i->productId = '36';
        $i->save();

        $i = new Image;
        $i->name = 'Suplemento control';
        $i->path = 'storage/images/products/37-front.jpg';
        $i->productId = '37';
        $i->save();

        $i = new Image;
        $i->name = 'Suplemento control';
        $i->path = 'storage/images/products/37-back.jpg';
        $i->productId = '37';
        $i->save();
    }
}
