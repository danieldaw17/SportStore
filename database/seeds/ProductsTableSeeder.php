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
        $p->name = 'RED FOOTBALL SHIRT';
        $p->description = 'Designed for players who control most of the technical gestures and movements on the field, in training and games.
        This football shirt with raglan sleeves offers great freedom of movement';
        $p->shortDescription = 'Red man academy soccer t-shirt';
        $p->basePrice = '19.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '1';
        $p->sportId = '1';
        $p->save();

        $p = new Product;
        $p->name = 'BLUE FOOTBALL SHIRT';
        $p->description = 'Designed for players who master most technical gestures and travel.
        This football shirt is the replica of the official shirt of Olympique de Lyon.';
        $p->shortDescription = 'Official soccer t-shirt olympique de lyon 2nd equipment man 2018/2019';
        $p->basePrice = '69.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '2';
        $p->sportId = '1';
        $p->save();

        $p = new Product;
        $p->name = 'FOOTBALL SHIRT BLACK/WHITE';
        $p->description = 'Our team of football fans has designed this F500 football jersey for training and matches. Put it to the test 4 times a week.
        This football shirt F500 is a basic version of our collection of soccer players. Even more breathable, with great freedom of movement to just think about the game.';
        $p->shortDescription = 'Kipsta F500 football tee black white woman';
        $p->basePrice = '8.99';
        $p->gender = 'woman';
        $p->subCategoryId = '1';
        $p->brandId = '3';
        $p->sportId = '1';
        $p->save();

        $p = new Product;
        $p->name = 'BLUE TENNIS SHIRT';
        $p->description = 'Designed to play tennis in warm weather. Product also suitable for other racquet sports: badminton, paddle tennis, squash, ping pong.
        This Nike Court Dry Team jersey offers an updated style for this new season, with a very technical Dri-Fit fabric to keep the body dry and comfortable on the court.';
        $p->shortDescription = 'Tennis t-shirt nike dry top team blue';
        $p->basePrice = '39.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '1';
        $p->sportId = '2';
        $p->save();

        $p = new Product;
        $p->name = 'WHITE TENNIS SHIRT';
        $p->description = 'Designed for the training of advanced level basketball players.
        T-shirt designed to play basketball. Very light and very soft, quickly removes sweating thanks to the breathable fabric. It will keep the body dry during training.';
        $p->shortDescription = 'Woman tennis top pure white';
        $p->basePrice = '6.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '1';
        $p->sportId = '3';
        $p->save();

        $p = new Product;
        $p->name = 'BLACK BASKETBALL JERSEY';
        $p->description = 'Designed for the training of advanced level basketball players.
        T-shirt designed to play basketball. Very light and very soft, quickly removes sweating thanks to the breathable fabric. It will keep the body dry during training.';
        $p->shortDescription = 'Basketball t-shirt man fast brooklyn black';
        $p->basePrice = '6.99';
        $p->gender = 'man';
        $p->subCategoryId = '1';
        $p->brandId = '3';
        $p->sportId = '3';
        $p->save();

        $p = new Product;
        $p->name = 'BLUE BASKETBALL JERSEY';
        $p->description = 'Our design teams have developed this shirt for the training of the basketball players.
        T-shirt conceived for the practice of basketball. Very light and very soft, quickly removes sweating thanks to the breathable fabric. Keep the body dry during practice.';
        $p->shortDescription = 'Fast basketball t-shirt woman cleveland blue perception level';
        $p->basePrice = '9.99';
        $p->gender = 'woman';
        $p->subCategoryId = '1';
        $p->brandId = '4';
        $p->sportId = '3';
        $p->save();

        $p = new Product;
        $p->name = 'SWIMMING SWIMSUIT BLACK';
        $p->description = 'Designed for beginning level swimmers who need freedom of movement and comfort.
        A swimming trunks that combines comfort and support in the shape of a skirt. The removable fillings provide a very flattering feminine touch.';
        $p->shortDescription = 'One piece swimsuit for women vega  black skirt';
        $p->basePrice = '19.99';
        $p->gender = 'woman';
        $p->subCategoryId = '6';
        $p->brandId = '5';
        $p->sportId = '4';
        $p->save();

        $p = new Product;
        $p->name = 'BLUE SOCCER SWEATSHIRT';
        $p->description = 'Footballers who dominate most of the technical gestures and movements.
        Training jacket with the colors of FC Barcelona. The jacket is delivered flocked with the club sponsor (Beko).';
        $p->shortDescription = 'FC Barcelona adult football sweatshirt 2018/2019';
        $p->basePrice = '49.99';
        $p->gender = 'man';
        $p->subCategoryId = '2';
        $p->brandId = '1';
        $p->sportId = '1';
        $p->save();

        $p = new Product;
        $p->name = 'PINK GYM SWEATSHIRT';
        $p->description = 'Conceived to keep the body warm before, during and after the session of gymnastics and pilates.
        Front pocket, wraparound hood to wrap at the end of the session.';
        $p->shortDescription = 'Sweatshirt 520 hood gymnastics stretching women light pink jaspered';
        $p->basePrice = '12.99';
        $p->gender = 'woman';
        $p->subCategoryId = '2';
        $p->brandId = '5';
        $p->sportId = '5';
        $p->save();

        $p = new Product;
        $p->name = 'GRAY BASKETBALL SOCKS';
        $p->description = 'Our design teams have created this sock to provide maximum protection in the most requested areas of the foot during basketball practice.
        Anatomical basketball socks designed with reinforced protection pads in strategic areas (ankle, instep, sole of the foot) to offer optimal comfort during practice.';
        $p->shortDescription = 'Basketball socks man/woman expert level s0900 mid black gray';
        $p->basePrice = '6.99';
        $p->gender = 'unisex';
        $p->subCategoryId = '3';
        $p->brandId = '4';
        $p->sportId = '3';
        $p->save();

        
        $p = new Product;
        $p->name = 'WHITE TENNIS SOCKS';
        $p->description= 'Conceived for players of level IMPROVEMENT players of racket sports.
        The resistance of tennis socks!';
        $p->shortDescription= 'Socks sports adult of raqueta nike largos basic white lot of 3';
        $p->basePrice= '10.99';
        $p->gender='unisex';
        $p->subCategoryId= '3';
        $p->brandId= '1';
        $p->sportId= '2';
        $p->save();
        
        $p = new Product;
        $p->name = 'WHITE CYCLING SNEAKERS';
        $p->description= 'Designed for: For MTB cyclists looking for a comfortable and durable shoe with a carbon sole.
        Great durability thanks to microfiber fabric.';
        $p->shortDescription= 'SP LUCK MASTER BTT';
        $p->basePrice= '59.99';
        $p->gender='unisex';
        $p->subCategoryId= '4';
        $p->brandId= '5';
        $p->sportId= '6';
        $p->save();
        
        $p = new Product;
        $p->name = 'YELLOW SOCCER SNEAKERS';
        $p->description= 'Concebido para jóvenes jugadores de fútbol sala que controlan la mayoría de los gestos técnicos en terrenos lisos y buscan ligereza. 
        Estas zapatillas de fútbol sala ofrece una buena comodidad a los jugadores gracias a su exterior de compresión Techfit® con un efecto en envuelve el pie.';
        $p->shortDescription= 'Football shoes x tango 18.3 yellow black';
        $p->basePrice= '42.99';
        $p->gender='man';
        $p->subCategoryId= '4';
        $p->brandId= '1';
        $p->sportId= '1';
        $p->save();
        
        $p = new Product;
        $p->name = 'PINK TENNIS SHOES';
        $p->description= 'Concebido para jugadoras intensivas de tenis que practican en todo tipo de superficies con desplazamientos intensos.
        Esta zapatilla de tenis para mujer está provista de una suela resistente de caucho RUBLAST y de un exterior únicamente reforzado en las zonas de desgaste para aunar resistencia y ligereza.';
        $p->shortDescription= 'Women tennis shoes ts990 white pink';
        $p->basePrice= '44.99';
        $p->gender='woman';
        $p->subCategoryId= '4';
        $p->brandId= '1';
        $p->sportId= '4';
        $p->save();
        
        $p = new Product;
        $p->name = 'BLUE TENNIS TROUSER';
        $p->description= 'Designed for playing tennis in warm weather, suitable for other racquet sports (badminton, paddle tennis, squash, ping pong).
        This tennis short ensures that you can carry balls optimally. It provides maximum comfort thanks to the light and breathable fabric and the elastic waist.';
        $p->shortDescription= 'Short tennis dry 500 short blue trousers';
        $p->basePrice= '6.99';
        $p->gender='man';
        $p->subCategoryId= '5';
        $p->brandId= '7';
        $p->sportId= '4';
        $p->save();
        
        $p = new Product;
        $p->name = 'DARK GRAY BASKETBALL PANTS';
        $p->description= 'This pants has been designed for women basketball players, for training, warm-ups and for before and after matches.
        Pants conceived for the practice of basketball. The component provides heat during practice. Female cut for optimal comfort.';
        $p->shortDescription= 'Basketball pants dark gray woman p100';
        $p->basePrice= '17.99';
        $p->gender='woman';
        $p->subCategoryId= '5';
        $p->brandId= '4';
        $p->sportId= '2';
        $p->save();
        
        $p = new Product;
        $p->name = 'WHITE SKATE WITH VINYL';
        $p->description = 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...
        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).';
        $p->shortDescription = 'Skateboard mid500 bear';
        $p->basePrice = '39.99';
        $p->gender = 'unisex';
        $p->wheelsAmount = 4;
        $p->weight = '2.44';
        $p->subCategoryId = '9';
        $p->brandId = '6';
        $p->sportId = '7';
        $p->save();


        $p = new Product;
        $p->name = 'SKATE STYLE WITH VARIOUS COLORS';
        $p->description = 'Conceived for young skaters (8-12 years old) who want to make their first tricks (figures): ollie, flip, grind ...
        Do you know how to skate? With the MID500 you can make figures! An economical skateboard and left to learn to make the first figures (not suitable for skaters that measure less than 1.30 m).';
        $p->shortDescription = 'Skateboard mid500 monkey';
        $p->basePrice = '39.99';
        $p->gender = 'unisex';
        $p->wheelsAmount = 4;
        $p->weight = '2.44';
        $p->subCategoryId = '9';
        $p->brandId = '6';
        $p->sportId = '7';
        $p->save();

        $p = new Product;
        $p->name = 'MOUNTAIN BIKE WITH COLORED STRIPES';
        $p->description = 'evade in the first outings in BTT. Make efforts and have fun before small obstacles in the middle of nature.
        Comfort first and foremost: comfort during practice with a CGF frame with an upright position, 80 mm suspension, ERGOFIT "hamac" saddle with Flex seat post, 27.5 "wheels (26" XS).';
        $p->shortDescription = 'Bike rockrider st 100 gray 27.5"';
        $p->basePrice = '199.99';
        $p->gender = 'unisex';
        $p->wheelsAmount = 2;
        $p->weight = '17.00';
        $p->subCategoryId = '7';
        $p->brandId = '8';
        $p->sportId = '6';
        $p->save();

        $p = new Product;
        $p->name = 'BLACK CARBON ROAD BIKE';
        $p->description = 'the regular practice of road cycling. It guarantees unparalleled comfort to practice more kilometers and more frequently.
        Pedal further and more frequently with our most comfortable road bike ever developed. Discover the disc brakes, the specific geometry and the Shimano Sora group.';
        $p->shortDescription = 'Bicycle road ciclyturism triban rc 500"';
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
        $p->name = 'YELLOW SCOOTER';
        $p->description = 'Young practitioners who want to discover the first sensations in freestyle scooters.
        A freestyle scooter for everyone!';
        $p->shortDescription = 'Freestyle scooter mf one yellow 2016"';
        $p->basePrice = '49.99';
        $p->gender = 'unisex';
        $p->wheelsAmount = 2;
        $p->weight = '3.6';
        $p->subCategoryId = '8';
        $p->brandId = '6';
        $p->sportId = '7';
        $p->save();

        
        $p = new Product;
        $p->name = 'GRAY ELECTRIC SCOOTER ELECTRIC';
        $p->description = 'Conceived for regular long distance journeys in the city. (up to 20 km). Size: from 1.45 m to 1.95 m. From 14 years old.
        THE COMFORT OF THE DOUBLE SUSPENSION AND THE DISC BRAKING TO MOVE IN ELECTRIC MODE.';
        $p->shortDescription = 'Dark gray electric scooter R ';
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
        $p->name = 'GRAY GYM PANTS';
        $p->description= 'Designed for bodybuilding at home or the gym.
        Lightweight and resistant gloves, that evacuate quickly the perspiration. Adherent material in the palm, for a better grip.';
        $p->shortDescription= 'Muscle glove 100 domyos black and red';
        $p->basePrice= '5.99';
        $p->gender='unisex';
        $p->subCategoryId= '10';
        $p->brandId= '5';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'BLUE TENNIS GLOVES';
        $p->description= 'Designed for the practice of racquet sports with COLD WEATHER.
        This seamless glove avoids any point of discomfort. It provides comfort during the practice during the winter. The peaks of the palm provide a better grip of the racket.';
        $p->shortDescription= 'Artengo thermal gloves';
        $p->basePrice= '8.99';
        $p->gender='unisex';
        $p->subCategoryId= '10';
        $p->brandId= '7';
        $p->sportId= '4';
        $p->save();
        
        $p = new Product;
        $p->name = 'YELLOW CYCLING GLASSES';
        $p->description= 'Designed for cyclists who practice in sunny weather. Cycling glasses category 3. Crystals 100% Anti-UV
        Ideal for thin and medium faces. The ROADR 500 effectively protects against external aggressions (wind, dust). Frame and glasses optimized to prevent fogging.';
        $p->shortDescription= 'Cycling glasses adult road 500 category 3 yellow / green fluorescent';
        $p->basePrice= '13.99';
        $p->gender='man';
        $p->subCategoryId= '11';
        $p->brandId= '8';
        $p->sportId= '6';
        $p->save();
        
        $p = new Product;
        $p->name = 'WHITE SWIMMING GOGGLES';
        $p->description= 'Designed for expert level swimmers who want to train or stay fit.
        COMFORT and STABILITY optimal for swimming. The perfect glasses for your workouts!';
        $p->shortDescription= 'B-FIT WHITE BLACK SWIMMING GOGGLES';
        $p->basePrice= '14.99';
        $p->gender='woman';
        $p->subCategoryId= '11';
        $p->brandId= '9';
        $p->sportId= '3';
        $p->save();
        
        $p = new Product;
        $p->name = 'BLACK CICLYNG BIKE';
        $p->description= 'Conceived to protect during the displacements and urban walks, by streets, cycle lanes and parks.
        Wear a helmet without discomfort! Airy and comfortable helmet, adapts to the head thanks to the adjustment wheel. Optional lighting for greater security.';
        $p->shortDescription= 'Helmet urban bike 500 black';
        $p->basePrice= '19.99';
        $p->gender='man';
        $p->subCategoryId= '12';
        $p->brandId= '8';
        $p->sportId= '6';
        $p->save();
        
        $p = new Product;
        $p->name = 'WHITE CYCLING HELMET';
        $p->description= 'Conceived for Conceived to protect the head during the first crossings in BTT.
        The ROCKRIDER ST 100 BTT helmet is easy to adjust and comfortable and protects your head from bumps. You will value its 9 larger ventilation holes for more ventilation.';
        $p->shortDescription= 'Helmet btt st 100 white';
        $p->basePrice= '19.99';
        $p->gender='man';
        $p->subCategoryId= '12';
        $p->brandId= '8';
        $p->sportId= '6';
        $p->save();
        
        $p = new Product;
        $p->name = 'THUMB SUPPORT';
        $p->description= 'The Strong 700 thumb support was designed for getting back into sport after spraining your thumb or suffering osteoarthritis.
        This thumb support holds your thumb tightly during training sessions and matches without getting in the way. Play on any surface without worrying about your painful thumb.';
        $p->shortDescription= 'Tarmak strong 700 men/women left/right thumb support - black';
        $p->basePrice= '12.99';
        $p->gender='unisex';
        $p->subCategoryId= '13';
        $p->brandId= '4';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'KNEE CAP BLACK';
        $p->description= 'Soft 500 kneecap support designed for returning to sport after kneecap problems
        This kneecap support has a comfortable knit that wicks perspiration away so that you can exercise without worrying about your knees. The silicone ring stabilises your kneecap.';
        $p->shortDescription= 'Tarmak soft 500 left/right knee kneecap support - black';
        $p->basePrice= '12.99';
        $p->gender='unisex';
        $p->subCategoryId= '13';
        $p->brandId= '4';
        $p->sportId= '1';
        $p->save();
        
        $p = new Product;
        $p->name = 'WHITE SOCCER BALL';
        $p->description= 'Designed for football players who can perform most technical football moves on the pitch and are looking for a comfortable and durable ball.';
        $p->shortDescription= 'Adidas top glidder football 2018 world cup t5';
        $p->basePrice= '17.99';
        $p->gender='unisex';
        $p->subCategoryId= '14';
        $p->brandId= '2';
        $p->sportId= '1';
        $p->save();
        
        $p = new Product;
        $p->name = 'ORANGE BASKETBALL BALL';
        $p->description= 'Designed for playing basketball indoors/outdoors for players aged 13 years upwards.
        This size 7 basketball is one of a kind. Its polyurethane cover gives it an excellent ball feel';
        $p->shortDescription= 'Tarmak R700 deluxe size 7 basketball - orange great ball feel';
        $p->basePrice= '17.99';
        $p->gender='unisex';
        $p->subCategoryId= '14';
        $p->brandId= '4';
        $p->sportId= '2';
        $p->save();
        
        $p = new Product;
        $p->name = 'PROTEIN FOOD SUPPLEMENT';
        $p->description= 'WPC Concentrated Whey Protein. Now with more protein and without soy lecithin!';
        $p->shortDescription= 'Evowhey protein 2.0';
        $p->basePrice= '9.90';
        $p->gender='unisex';
        $p->typeSupplement='Protein suplement';
        $p->volume='23x33';
        $p->weight='500';
        $p->subCategoryId= '15';
        $p->brandId= '10';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'POWDERCREATINE SUPPLEMENT';
        $p->description= 'Micronized Creatine Monohydrate. Ideal for high intensity activities.';
        $p->shortDescription= 'Microwaved monohydrate creatine';
        $p->basePrice= '7.90';
        $p->gender='unisex';
        $p->typeSupplement='Muscle development';
        $p->volume='19x26';
        $p->weight='500';
        $p->subCategoryId= '16';
        $p->brandId= '10';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'FOOD SUPPLEMENT OF HYDROLYZATE AND MAGNESIUM';
        $p->description= 'Hydrolyzed collagen of bovine origin with magnesium and vitamin C. No fish!';
        $p->shortDescription= 'Hydrolyzed collagen + magnesium 2.0 powder';
        $p->basePrice= '6.90';
        $p->gender='unisex';
        $p->typeSupplement='Food suplement';
        $p->volume='14x20';
        $p->weight='150';
        $p->subCategoryId= '17';
        $p->brandId= '10';
        $p->sportId= '8';
        $p->save();
        
        $p = new Product;
        $p->name = 'SUPPLEMENT FOR WEIGHT LOSS AND THERMOGENIC';
        $p->description= 'Loss of weight Extreme energy greater concentration ... It is the most powerful thermogenic that guarantees real results with an innovative formula that uses body fat and converts it into energy. Intense workouts that will help you to have a defined body Hydroxycut Hardcore Elite contains key ingredients developed exclusively by MUSCLETECH With Hydroxycut Hardcore® Elite you will obtain powerful effective and real results.';
        $p->shortDescription= 'Muscletech Hydroxycut Hardcore ELITE 110 cap';
        $p->basePrice= '21.00';
        $p->gender='unisex';
        $p->typeSupplement='weight control';
        $p->volume='19x26';
        $p->weight='500';
        $p->subCategoryId= '18';
        $p->brandId= '10';
        $p->sportId= '8';
        $p->save(); 
    }
}
