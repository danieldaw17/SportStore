<?php

use Illuminate\Database\Seeder;
use App\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Semilla de productos

        $p = new Product;
        $p->name = 'CAMISETA DE FÚTBOL ACADEMY HOMBRE ROJO';
        $p->description = 'Concebido para futbolistas que controlan la mayoría de los gestos técnicos y desplazamientos sobre el terreno, en los entrenamientos y partidos.
        Esta camiseta de fútbol con mangas raglán ofrece una gran libertad de movimientos.';
        $p->shortDescription = 'Camiseta futbol rojo ';
        $p->basePrice = '19.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '1';
        $p->sportId = '1';
        $p->save();

        $p = new Product;
        $p->name = 'CAMISETA DE FÚTBOL OFICIAL OLYMPIQUE DE LYON 2ª EQUIPACIÓN HOMBRE 2018/2019';
        $p->description = 'Concebido para futbolistas que dominan la mayoría de gestos técnicos y desplazamientos.
        Esta camiseta de fútbol es la réplica de la camiseta oficial del Olympique de Lyon..';
        $p->shortDescription = 'Camiseta futbol azul ';
        $p->basePrice = '69.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '2';
        $p->sportId = '1';
        $p->save();

        $p = new Product;
        $p->name = 'CAMISETA DE FÚTBOL KIPSTA F500 MUJER NEGRO BLANCO';
        $p->description = 'Nuestro equipo de apasionados por el fútbol ha diseñado esta camiseta de fútbol F500 para entrenamientos y partidos.Ponla a prueba 4 veces por semana.
        Esta camiseta de fútbol F500 es un básico de nuestra colección dedicada a las jugadoras de fútbol. Aun más transpirable, con gran libertad de movimientos para solo pienses en el juego.';
        $p->shortDescription = 'Camiseta futbol negro/blanco';
        $p->basePrice = '8.99';
        $p->gender = 'woman';
        $p->subCategoryId = '1';
        $p->brandId = '3';
        $p->sportId = '1';
        $p->save();

        $p = new Product;
        $p->name = 'CAMISETA TENIS NIKE DRY TOP TEAM AZUL';
        $p->description = 'Concebido para jugar al tenis con tiempo cálido. Producto también adecuado para otros deportes de raqueta: bádminton, pádel, squash, ping pong.
        Esta camiseta Nike Court Dry Team ofrece un estilo actualizado para esta nueva temporada, con un tejido muy técnico Dri-Fit para mantener el cuerpo seco y cómodo en la cancha.';
        $p->shortDescription = 'Camiseta tennis azul';
        $p->basePrice = '39.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '1';
        $p->sportId = '2';
        $p->save();

        $p = new Product;
        $p->name = 'TOP DE TENIS MUJER PURE BLANCO';
        $p->description = 'Concebido para los entrenamientos de los jugadores de baloncesto de nivel perfeccionamiento.
        Camiseta diseñada para jugar al baloncesto. Muy ligera y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Mantendrá el cuerpo seco durante el entrenamiento.';
        $p->shortDescription = 'Camiseta tennis blanco';
        $p->basePrice = '6.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '1';
        $p->sportId = '3';
        $p->save();

        $p = new Product;
        $p->name = 'CAMISETA BALONCESTO HOMBRE FAST BROOKLYN NEGRO';
        $p->description = 'Concebido para los entrenamientos de los jugadores de baloncesto de nivel perfeccionamiento.
        Camiseta diseñada para jugar al baloncesto. Muy ligera y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Mantendrá el cuerpo seco durante el entrenamiento.';
        $p->shortDescription = 'Camiseta baloncesto negro';
        $p->basePrice = '6.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '3';
        $p->sportId = '3';
        $p->save();

        $p = new Product;
        $p->name = 'CAMISETA FAST DE BALONCESTO MUJER NIVEL PERFECCIONAMIENTO CLEVELAND AZUL';
        $p->description = 'Nuestros equipos de diseño han desarrollado esta camiseta para los entrenamientos de las jugadoras de baloncesto.
        Camiseta concebida para la práctica del baloncesto. Muy ligero y muy suave, evacua rápidamente la sudoración gracias al tejido transpirable. Conserva el cuerpo seco durante la práctica.';
        $p->shortDescription = 'Camiseta baloncesto azul';
        $p->basePrice = '9.99';
        $p->gender = 'woman';
        $p->subCategoryId = '1';
        $p->brandId = '4';
        $p->sportId = '3';
        $p->save();

        $p = new Product;
        $p->name = 'BAÑADOR DE NATACIÓN UNA PIEZA PARA MUJER VEGA FALDITA NEGRO';
        $p->description = 'Concebido para nadadoras de nivel iniciación que necesitan libertad de movimientos y comodidad.
        Un bañador de natación que aúna comodidad y sujeción con forma de faldita. Los rellenos desmontables aportan un toque femenino muy favorecedor.';
        $p->shortDescription = 'Bañador natacion negro';
        $p->basePrice = '19.99';
        $p->gender = 'woman';
        $p->subCategoryId = '6';
        $p->brandId = '5';
        $p->sportId = '4';
        $p->save();

        $p = new Product;
        $p->name = 'SUDADERA DE FÚTBOL ADULTO FC BARCELONA 2018/2019';
        $p->description = 'futbolistas que dominan la mayoría de los gestos técnicos y los desplazamientos.
        Chaqueta de entrenamiento con los colores del FC Barcelona.La chaqueta se entrega flocada con el sponsor del club (Beko).';
        $p->shortDescription = 'Sudadera futbol azul';
        $p->basePrice = '49.99';
        $p->gender = 'man';
        $p->subCategoryId = '2';
        $p->brandId = '1';
        $p->sportId = '1';
        $p->save();

        $p = new Product;
        $p->name = 'SUDADERA 520 CAPUCHA GIMNASIA STRETCHING MUJER ROSA CLARO JASPEADO';
        $p->description = 'Concebido para mantener el cuerpo abrigado antes, durante y después de la sesión de gimnasia y pilates.
        Bolsillo delante, capucha envolvente para abrigar al finalizar la sesión.';
        $p->shortDescription = 'Sudadera gimnasia rosa';
        $p->basePrice = '12.99';
        $p->gender = 'woman';
        $p->subCategoryId = '2';
        $p->brandId = '5';
        $p->sportId = '5';
        $p->save();

        $p = new Product;
        $p->name = 'CALCETINES DE BALONCESTO HOMBRE/MUJER NIVEL EXPERTO SO900 MID NEGRO GRIS';
        $p->description = 'Nuestros equipos de diseño han creado este calcetín para aportar una protección máxima en las zonas del pie más solicitadas durante la práctica del baloncesto.
        Calcetines anatómicos de baloncesto concebidos con pads de protección reforzados en zonas estratégicas (tobillo, empeine, planta del pie) para ofrecer una comodidad óptima durante la práctica.';
        $p->shortDescription = 'Calcetines Baloncesto Gris';
        $p->basePrice = '6.99';
        $p->gender = 'unisex';
        $p->subCategoryId = '3';
        $p->brandId = '4';
        $p->sportId = '3';
        $p->save();

        
        $p = new Product;
        $p->name = 'CALCETINES DEPORTES ADULTOS DE RAQUETA NIKE LARGOS BASIC BLANCO LOTE DE 3';
        $p->description= 'Concebido para jugadores de nivel PERFECCIONAMIENTO practicantes de deportes de raqueta.
        ¡La resistencia de unos calcetines de tenis!';
        $p->shortDescription= 'Calcetines Blanco';
        $p->basePrice= '10.99';
        $p->gender='unisex';
        $p->subCategoryId= '3';
        $p->brandId= '1';
        $p->sportId= '2';
        $p->save();
        
        $p = new Product;
        $p->name = 'SP LUCK MASTER BTT';
        $p->description= 'Concebido para Para los ciclistas BTT que buscan una zapatilla cómoda y resistente, con suela de carbono.
        Gran durabilidad gracias al tejido microfibra.';
        $p->shortDescription= 'Zapatos Blanco';
        $p->basePrice= '59.99';
        $p->gender='unisex';
        $p->subCategoryId= '4';
        $p->brandId= '5';
        $p->sportId= '6';
        $p->save();
        
        $p = new Product;
        $p->name = 'ZAPATILLAS FÚTBOL SALA X TANGO 18.3 JÚNIOR AMARILLO NEGRO';
        $p->description= 'Concebido para jóvenes jugadores de fútbol sala que controlan la mayoría de los gestos técnicos en terrenos lisos y buscan ligereza. 
        Estas zapatillas de fútbol sala ofrece una buena comodidad a los jugadores gracias a su exterior de compresión Techfit® con un efecto en envuelve el pie.';
        $p->shortDescription= 'Zapatos Amarillo';
        $p->basePrice= '42.99';
        $p->gender='man';
        $p->subCategoryId= '4';
        $p->brandId= '1';
        $p->sportId= '1';
        $p->save();
        
        $p = new Product;
        $p->name = 'ZAPATILLAS DE TENIS MUJER TS990 BLANCO ROSA';
        $p->description= 'Concebido para jugadoras intensivas de tenis que practican en todo tipo de superficies con desplazamientos intensos.
        Esta zapatilla de tenis para mujer está provista de una suela resistente de caucho RUBLAST y de un exterior únicamente reforzado en las zonas de desgaste para aunar resistencia y ligereza.';
        $p->shortDescription= 'Zapatos Rosa';
        $p->basePrice= '44.99';
        $p->gender='woman';
        $p->subCategoryId= '4';
        $p->brandId= '1';
        $p->sportId= '4';
        $p->save();
        
        $p = new Product;
        $p->name = 'PANTALONES CORTOS DE TENIS DRY 500 CORTO H AZUL NEGRO';
        $p->description= 'Concebido para la práctica de tenis con tiempo cálido, adecuado para otros deportes de raqueta (bádminton, pádel, squash, ping pong).
        Este short de tenis garantiza poder llevar pelotas de forma óptima. Aporta una comodidad máxima gracias al tejido ligero y transpirable, y a la cintura elástica.';
        $p->shortDescription= 'Pantalones Azul';
        $p->basePrice= '6.99';
        $p->gender='man';
        $p->subCategoryId= '5';
        $p->brandId= '7';
        $p->sportId= '4';
        $p->save();
        
        $p = new Product;
        $p->name = 'PANTALÓN B300 BALONCESTO MUJER NIVEL INICIACIÓN GRIS OSCURO';
        $p->description= 'Este pantalón ha sido concebido para las practicantes de baloncesto, para los entrenamientos, los calentamientos y para antes o después de los partidos.
        Pantalón concebido para la práctica del baloncesto. El componente aporta calor durante la práctica. Corte femenino para una óptima comodidad.';
        $p->shortDescription= 'Pantalones Gris';
        $p->basePrice= '17.99';
        $p->gender='woman';
        $p->subCategoryId= '5';
        $p->brandId= '4';
        $p->sportId= '2';
        $p->save();
        
        $p = new Product;
        $p->name = 'SKATEBOARD MID500 BEAR';
        $p->description = 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...
        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).';
        $p->shortDescription = 'White skate with vinyl ';
        $p->basePrice = '39.99';
        $p->gender = 'unisex';
        $p->wheelsAmount = 4;
        $p->weight = '2.44';
        $p->subCategoryId = '9';
        $p->brandId = '6';
        $p->sportId = '7';
        $p->save();


        $p = new Product;
        $p->name = 'SKATEBOARD MID500 MONKEY';
        $p->description = 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...
        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).';
        $p->shortDescription = 'Skate style with various colors';
        $p->basePrice = '39.99';
        $p->gender = 'unisex';
        $p->wheelsAmount = 4;
        $p->weight = '2.44';
        $p->subCategoryId = '9';
        $p->brandId = '6';
        $p->sportId = '7';
        $p->save();

        $p = new Product;
        $p->name = 'BIKE ROCKRIDER ST 100 GRAY 27,5"';
        $p->description = 'evade in the first outings in BTT. Make efforts and have fun before small obstacles in the middle of nature.
        Comfort first and foremost: comfort during practice with a CGF frame with an upright position, 80 mm suspension, ERGOFIT "hamac" saddle with Flex seat post, 27.5 "wheels (26" XS).';
        $p->shortDescription = 'Mountain bike with colored stripes';
        $p->basePrice = '199.99';
        $p->gender = 'unisex';
        $p->wheelsAmount = 2;
        $p->weight = '17.00';
        $p->subCategoryId = '7';
        $p->brandId = '8';
        $p->sportId = '6';
        $p->save();

        $p = new Product;
        $p->name = 'BICYCLE ROAD CICLYTURISM TRIBAN RC 500 "';
        $p->description = 'the regular practice of road cycling. It guarantees unparalleled comfort to practice more kilometers and more frequently.
        Pedal further and more frequently with our most comfortable road bike ever developed. Discover the disc brakes, the specific geometry and the Shimano Sora group.';
        $p->shortDescription = 'black carbon road bike';
        $p->basePrice = '649.99';
        $p->gender = 'unisex';
        $p->shifts =9;
        $p->wheelsAmount = 2;
        $p->weight = '20.00';
        $p->subCategoryId = '7';
        $p->brandId = '8';
        $p->sportId = '6';
        $p->save();

        $p = new Product;
        $p->name = 'SKATEBOARD FREESTYLE MF ONE YELLOW 2016 "';
        $p->description = 'Young practitioners who want to discover the first sensations in freestyle scooters.
        A freestyle scooter for everyone!';
        $p->shortDescription = 'Patinete de color amarillo';
        $p->basePrice = '49.99';
        $p->gender = 'unisex';
        $p->wheelsAmount = 2;
        $p->weight = '3.6';
        $p->subCategoryId = '8';
        $p->brandId = '6';
        $p->sportId = '7';
        $p->save();

        
        $p = new Product;
        $p->name = 'ELECTRIC SKATEBOARD ADULT REVOLT R GRAY DARK';
        $p->description = 'Conceived for regular long distance journeys in the city. (up to 20 km). Size: from 1.45 m to 1.95 m. From 14 years old.
        THE COMFORT OF THE DOUBLE SUSPENSION AND THE DISC BRAKING TO MOVE IN ELECTRIC MODE.';
        $p->shortDescription = 'Electric scooter of adult ';
        $p->basePrice = '549.99';
        $p->gender = 'unisex';
        $p->shifts = 3;
        $p->wheelsAmount = 2;
        $p->weight = '11.5';
        $p->subCategoryId = '8';
        $p->brandId = '6';
        $p->sportId = '7';
        $p->save();
        
        $p = new Product;
        $p->name = 'GUANTE DE MUSCULACIÓN 100 DOMYOS NEGRO Y ROJO';
        $p->description= 'Concebido para la musculación en casa o el gimnasio.
        Guantes ligeros y resistentes, que evacuan rápidamente la sudoración. Material adherente en la palma, para un mejor agarre.';
        $p->shortDescription= 'Pantalones Gris';
        $p->basePrice= '5.99';
        $p->gender='unisex';
        $p->subCategoryId= '10';
        $p->brandId= '5';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'ARTENGO GUANTE TÉRMICO MAR';
        $p->description= 'Concebido para la práctica de deportes de raqueta con TIEMPO FRÍO.
        Este guante sin costuras evita cualquier punto de molestia. Aporta confort durante la práctica durante el invierno. Los picos de la palma de la mano proporcionan un mejor agarre de la raqueta.';
        $p->shortDescription= 'Guantes Azul';
        $p->basePrice= '8.99';
        $p->gender='unisex';
        $p->subCategoryId= '10';
        $p->brandId= '7';
        $p->sportId= '4';
        $p->save();
        
        $p = new Product;
        $p->name = 'GAFAS DE CICLISMO ADULTO ROADR 500 CATEGORÍA 3 AMARILLO/VERDE FLUORESCENTE';
        $p->description= 'Concebido para ciclistas que practican con tiempo soleado. Gafas de ciclismo categoría 3. Cristales 100% Anti-UV
        Ideal para rostros delgados y medianos. Las ROADR 500 protegen eficazmente de las agresiones exteriores (viento, polvo). Montura y cristales optimizados para evitar la formación de vaho';
        $p->shortDescription= 'Gafas amarillo';
        $p->basePrice= '13.99';
        $p->gender='man';
        $p->subCategoryId= '11';
        $p->brandId= '8';
        $p->sportId= '6';
        $p->save();
        
        $p = new Product;
        $p->name = 'GAFAS DE NATACIÓN B-FIT BLANCO NEGRO';
        $p->description= 'Concebido para los nadadores nivel experto que quieren entrenarse o mantenerse en forma.
        CONFORT y ESTABILIDAD óptimas para nadar. ¡Las gafas perfectas para tus entrenamientos!';
        $p->shortDescription= 'Gafas blanco';
        $p->basePrice= '14.99';
        $p->gender='woman';
        $p->subCategoryId= '11';
        $p->brandId= '9';
        $p->sportId= '3';
        $p->save();
        
        $p = new Product;
        $p->name = 'CASCO BICI URBANA 500 NEGRO';
        $p->description= 'Concebido para proteger durante los desplazamiento y paseos urbanos, por calles, carriles bici y parques.
        ¡Lleva casco sin molestias! Casco aireado y cómodo, se adapta a la cabeza gracias a la rueda de ajuste. Alumbrado opcional para mayor seguridad.';
        $p->shortDescription= 'Casco negro';
        $p->basePrice= '19.99';
        $p->gender='man';
        $p->subCategoryId= '12';
        $p->brandId= '8';
        $p->sportId= '6';
        $p->save();
        
        $p = new Product;
        $p->name = 'CASCO BTT ST 100 BLANCO';
        $p->description= 'Concebido para Concebido para proteger la cabeza durante las primeras travesías en BTT.
        El casco de BTT ROCKRIDER ST 100 es fácil de ajustar y cómodo y te protege la cabeza de los golpes. Valorarás sus 9 agujeros de aireación, más grandes, para más ventilación.';
        $p->shortDescription= 'Casco blanco';
        $p->basePrice= '19.99';
        $p->gender='man';
        $p->subCategoryId= '12';
        $p->brandId= '8';
        $p->sportId= '6';
        $p->save();
        
        $p = new Product;
        $p->name = 'TARMAK STRONG 700 MEN/WOMEN LEFT/RIGHT THUMB SUPPORT - BLACK';
        $p->description= 'The Strong 700 thumb support was designed for getting back into sport after spraining your thumb or suffering osteoarthritis.
        This thumb support holds your thumb tightly during training sessions and matches without getting in the way. Play on any surface without worrying about your painful thumb.';
        $p->shortDescription= 'THUMB SUPPORT';
        $p->basePrice= '12.99';
        $p->gender='unisex';
        $p->subCategoryId= '13';
        $p->brandId= '4';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'TARMAK SOFT 500 LEFT/RIGHT KNEE KNEECAP SUPPORT - BLACK';
        $p->description= 'Soft 500 kneecap support designed for returning to sport after kneecap problems
        This kneecap support has a comfortable knit that wicks perspiration away so that you can exercise without worrying about your knees. The silicone ring stabilises your kneecap.';
        $p->shortDescription= 'Knee cap black';
        $p->basePrice= '12.99';
        $p->gender='unisex';
        $p->subCategoryId= '13';
        $p->brandId= '4';
        $p->sportId= '1';
        $p->save();
        
        $p = new Product;
        $p->name = 'ADIDAS TOP GLIDER FOOTBALL 2018 WORLD CUP T5';
        $p->description= 'Designed for football players who can perform most technical football moves on the pitch and are looking for a comfortable and durable ball.';
        $p->shortDescription= 'Football ball white';
        $p->basePrice= '17.99';
        $p->gender='unisex';
        $p->subCategoryId= '14';
        $p->brandId= '2';
        $p->sportId= '1';
        $p->save();
        
        $p = new Product;
        $p->name = 'TARMAK R700 DELUXE ADULT SIZE 7 BASKETBALL - ORANGE GREAT BALL FEEL';
        $p->description= 'Designed for playing basketball indoors/outdoors for players aged 13 years upwards.
        This size 7 basketball is one of a kind. Its polyurethane cover gives it an excellent ball feel';
        $p->shortDescription= 'Basketball ball';
        $p->basePrice= '17.99';
        $p->gender='unisex';
        $p->subCategoryId= '14';
        $p->brandId= '4';
        $p->sportId= '2';
        $p->save();
        
        $p = new Product;
        $p->name = 'EVOWHEY PROTEIN 2.0';
        $p->description= 'WPC Concentrated Whey Protein. Now with more protein and without soy lecithin!';
        $p->shortDescription= 'Protein food supplement';
        $p->basePrice= '9.90';
        $p->gender='unisex';
        $p->typeSupplement='Protein suplement';
        //$p->volume='23x33';
        $p->weight='500';
        $p->subCategoryId= '15';
        $p->brandId= '10';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'MICROWAVED MONOHYDRATE CREATINE POWDER';
        $p->description= 'Micronized Creatine Monohydrate. Ideal for high intensity activities.';
        $p->shortDescription= 'Creatine supplement';
        $p->basePrice= '7.90';
        $p->gender='unisex';
        $p->typeSupplement='Muscle development';
        //$p->volume='19x26';
        $p->weight='500';
        $p->subCategoryId= '16';
        $p->brandId= '10';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'HYDROLYZED COLLAGEN + MAGNESIUM 2.0 POWDER';
        $p->description= 'Hydrolyzed collagen of bovine origin with magnesium and vitamin C. No fish!';
        $p->shortDescription= 'Food supplement of hydrolyzate and magnesium';
        $p->basePrice= '6.90';
        $p->gender='unisex';
        $p->typeSupplement='Food suplement';
        //$p->volume='14x20';
        $p->weight='150';
        $p->subCategoryId= '17';
        $p->brandId= '10';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'Muscletech Hydroxycut Hardcore ELITE 110 cap';
        $p->description= 'Loss of weight Extreme energy greater concentration ... It is the most powerful thermogenic that guarantees real results with an innovative formula that uses body fat and converts it into energy. Intense workouts that will help you to have a defined body Hydroxycut Hardcore Elite contains key ingredients developed exclusively by MUSCLETECH With Hydroxycut Hardcore® Elite you will obtain powerful effective and real results.';
        $p->shortDescription= 'Supplement for weight loss and thermogenic';
        $p->basePrice= '21.00';
        $p->gender='unisex';
        $p->typeSupplement='weight control';
        //$p->volume='19x26';
        $p->weight='500';
        $p->subCategoryId= '18';
        $p->brandId= '10';
        $p->sportId= '8';
        $p->save(); 
    }
}
