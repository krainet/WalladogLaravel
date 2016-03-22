<?php

use Illuminate\Database\Seeder;
use Walladog\PetRace;

class PetRacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetRace::truncate();

        /**
         * Perros
         */
        PetRace::create(array('name'=>'Affenpinscher','id_pet_type'=>1));
        PetRace::create(array('name'=>'Airedale terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Akita Inu','id_pet_type'=>1));
        PetRace::create(array('name'=>'Akita Americano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Alano español','id_pet_type'=>1));
        PetRace::create(array('name'=>'Alaskan malamute','id_pet_type'=>1));
        PetRace::create(array('name'=>'American Hairless terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'American Staffordshire Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Antiguo Perro Pastor Inglés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Appenzeller','id_pet_type'=>1));
        PetRace::create(array('name'=>'Australian Cattle Dog','id_pet_type'=>1));
        PetRace::create(array('name'=>'Australian Silky Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Azawakh','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bardino (Perro majorero)','id_pet_type'=>1));
        PetRace::create(array('name'=>'Basenji','id_pet_type'=>1));
        PetRace::create(array('name'=>'Basset hound','id_pet_type'=>1));
        PetRace::create(array('name'=>'Beagle','id_pet_type'=>1));
        PetRace::create(array('name'=>'Beauceron','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bichon frisé','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bichón maltés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bobtail','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bloodhound','id_pet_type'=>1));
        PetRace::create(array('name'=>'Border collie','id_pet_type'=>1));
        PetRace::create(array('name'=>'Borzoi','id_pet_type'=>1));
        PetRace::create(array('name'=>'Boston terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bóxer','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco alemán de pelo corto','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco alemán de pelo duro','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco de Auvernia','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco francés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco húngaro','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco italiano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco tirolés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco de Saint Germain','id_pet_type'=>1));
        PetRace::create(array('name'=>'Braco de Weimar','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bull Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bulldog americano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bulldog francés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bulldog inglés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bullmastiff','id_pet_type'=>1));
        PetRace::create(array('name'=>'Can de palleiro','id_pet_type'=>1));
        PetRace::create(array('name'=>'Caniche','id_pet_type'=>1));
        PetRace::create(array('name'=>'Cão da Serra da Estrela','id_pet_type'=>1));
        PetRace::create(array('name'=>'Cão da Serra de Aires','id_pet_type'=>1));
        PetRace::create(array('name'=>'Cão de Agua Português','id_pet_type'=>1));
        PetRace::create(array('name'=>'Cão de Castro Laboreiro','id_pet_type'=>1));
        PetRace::create(array('name'=>'Cão de Fila de São Miguel','id_pet_type'=>1));
        PetRace::create(array('name'=>'Chesapeake Bay Retriever','id_pet_type'=>1));
        PetRace::create(array('name'=>'Chihuahueño','id_pet_type'=>1));
        PetRace::create(array('name'=>'Cimarrón Uruguayo','id_pet_type'=>1));
        PetRace::create(array('name'=>'Chow chow','id_pet_type'=>1));
        PetRace::create(array('name'=>'Clumber spaniel','id_pet_type'=>1));
        PetRace::create(array('name'=>'Cocker spaniel americano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Cocker spaniel inglés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Collie','id_pet_type'=>1));
        PetRace::create(array('name'=>'Bearded collie','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dachshund','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dálmata','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dandie Dinmont Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Deerhound','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dobermann','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dogo alemán','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dogo argentino','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dogo de burdeos','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dogo del Tíbet','id_pet_type'=>1));
        PetRace::create(array('name'=>'Dogo guatemalteco','id_pet_type'=>1));
        PetRace::create(array('name'=>'English springer spaniel','id_pet_type'=>1));
        PetRace::create(array('name'=>'Entlebucher','id_pet_type'=>1));
        PetRace::create(array('name'=>'Épagneul bretón','id_pet_type'=>1));
        PetRace::create(array('name'=>'Épagneul français','id_pet_type'=>1));
        PetRace::create(array('name'=>'Epagneul papillón','id_pet_type'=>1));
        PetRace::create(array('name'=>'Eurasier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Fila Brasileiro','id_pet_type'=>1));
        PetRace::create(array('name'=>'Flat-Coated Retriever','id_pet_type'=>1));
        PetRace::create(array('name'=>'Fox Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Galgo español','id_pet_type'=>1));
        PetRace::create(array('name'=>'Galgo húngaro','id_pet_type'=>1));
        PetRace::create(array('name'=>'Galgo inglés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Galgo italiano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Golden retriever','id_pet_type'=>1));
        PetRace::create(array('name'=>'Gran danés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Gegar colombiano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Greyhound','id_pet_type'=>1));
        PetRace::create(array('name'=>'Grifón belga','id_pet_type'=>1));
        PetRace::create(array('name'=>'Hovawart','id_pet_type'=>1));
        PetRace::create(array('name'=>'Husky siberiano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Jack Russell Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Keeshond','id_pet_type'=>1));
        PetRace::create(array('name'=>'Kerry blue terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Komondor','id_pet_type'=>1));
        PetRace::create(array('name'=>'Kuvasz','id_pet_type'=>1));
        PetRace::create(array('name'=>'Labrador','id_pet_type'=>1));
        PetRace::create(array('name'=>'Lakeland Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Laekenois','id_pet_type'=>1));
        PetRace::create(array('name'=>'Landseer','id_pet_type'=>1));
        PetRace::create(array('name'=>'Lebrel afgano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Leonberger','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro lobo de Saarloos','id_pet_type'=>1));
        PetRace::create(array('name'=>'Lhasa apso','id_pet_type'=>1));
        PetRace::create(array('name'=>'Löwchen','id_pet_type'=>1));
        PetRace::create(array('name'=>'Maltés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Malinois','id_pet_type'=>1));
        PetRace::create(array('name'=>'Manchester terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mastín afgano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mastín del Pirineo','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mastín español','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mastín inglés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mastín napolitano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mastín tibetano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mucuchies','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mudi','id_pet_type'=>1));
        PetRace::create(array('name'=>'Nova Scotia Duck Tolling Retriever','id_pet_type'=>1));
        PetRace::create(array('name'=>'Ovejero magallánico','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor alemán','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor belga','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor blanco suizo','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor catalán','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor croata','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor garafiano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor holandés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor peruano Chiribaya','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor de los Pirineos','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor leonés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor mallorquín','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor maremmano-abrucés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pastor vasco','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pekinés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pembroke Welsh Corgi','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pequeño Lebrel Italiano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perdiguero francés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perdiguero portugués','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro cimarrón uruguayo','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro de agua americano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro de agua español','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro de agua irlandés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro de agua portugués','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro dogo mallorquín','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro esquimal canadiense','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro de Montaña de los Pirineos','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro fino colombiano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro pastor de las islas Shetland','id_pet_type'=>1));
        PetRace::create(array('name'=>'Perro peruano sin pelo','id_pet_type'=>1));
        PetRace::create(array('name'=>'Phalène','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pinscher alemán','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pinscher miniatura','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pitbull','id_pet_type'=>1));
        PetRace::create(array('name'=>'Podenco canario','id_pet_type'=>1));
        PetRace::create(array('name'=>'Podenco ibicenco','id_pet_type'=>1));
        PetRace::create(array('name'=>'Podenco portugués','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pointer','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pomerania','id_pet_type'=>1));
        PetRace::create(array('name'=>'Presa canario','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pudelpointer','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pug','id_pet_type'=>1));
        PetRace::create(array('name'=>'Puli','id_pet_type'=>1));
        PetRace::create(array('name'=>'Pumi','id_pet_type'=>1));
        PetRace::create(array('name'=>'Rafeiro do Alentejo','id_pet_type'=>1));
        PetRace::create(array('name'=>'Ratonero bodeguero andaluz','id_pet_type'=>1));
        PetRace::create(array('name'=>'Ratonero mallorquín','id_pet_type'=>1));
        PetRace::create(array('name'=>'Ratonero valenciano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Rhodesian Ridgeback','id_pet_type'=>1));
        PetRace::create(array('name'=>'Rottweiler','id_pet_type'=>1));
        PetRace::create(array('name'=>'Saluki','id_pet_type'=>1));
        PetRace::create(array('name'=>'Samoyedo','id_pet_type'=>1));
        PetRace::create(array('name'=>'San Bernardo','id_pet_type'=>1));
        PetRace::create(array('name'=>'Schnauzer estándar','id_pet_type'=>1));
        PetRace::create(array('name'=>'Schnauzer gigante','id_pet_type'=>1));
        PetRace::create(array('name'=>'Schnauzer miniatura','id_pet_type'=>1));
        PetRace::create(array('name'=>'Staffordshire Bull Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Setter inglés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Setter irlandés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Shar Pei','id_pet_type'=>1));
        PetRace::create(array('name'=>'Shiba Inu','id_pet_type'=>1));
        PetRace::create(array('name'=>'Shih Tzu','id_pet_type'=>1));
        PetRace::create(array('name'=>'Skye terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Spitz enano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Spitz grande','id_pet_type'=>1));
        PetRace::create(array('name'=>'Spitz mediano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Spitz japonés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Sussex spaniel','id_pet_type'=>1));
        PetRace::create(array('name'=>'Teckel','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terranova','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier alemán','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier australiano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier brasileño','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier chileno','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier escocés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier galés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier irlandés','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier ruso negro','id_pet_type'=>1));
        PetRace::create(array('name'=>'Terrier tibetano','id_pet_type'=>1));
        PetRace::create(array('name'=>'Tervueren','id_pet_type'=>1));
        PetRace::create(array('name'=>'Weimaraner','id_pet_type'=>1));
        PetRace::create(array('name'=>'West Highland White Terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Whippet','id_pet_type'=>1));
        PetRace::create(array('name'=>'Wolfsspitz','id_pet_type'=>1));
        PetRace::create(array('name'=>'Xoloitzcuintle','id_pet_type'=>1));
        PetRace::create(array('name'=>'Yorkshire terrier','id_pet_type'=>1));
        PetRace::create(array('name'=>'Otra raza','id_pet_type'=>1));
        PetRace::create(array('name'=>'Mestizo','id_pet_type'=>1));
        PetRace::create(array('name'=>'Crestado Chino','id_pet_type'=>1));
        PetRace::create(array('name'=>'Otros','id_pet_type'=>1));

        /**
         * Gatos
         */
        PetRace::create(array('name'=>'Angora','id_pet_type'=>2));
        PetRace::create(array('name'=>'Ruso Azul','id_pet_type'=>2));
        PetRace::create(array('name'=>'Siames','id_pet_type'=>2));

        /**
         * Iguanas
         */
        PetRace::create(array('name'=>'Moteada','id_pet_type'=>3));

    }
}
