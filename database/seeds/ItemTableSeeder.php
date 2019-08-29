<?php

use Illuminate\Database\Seeder;
use App\Item;
class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // BONJOUR
        Item::create([
            'name' => 'BONJOUR',
            'medias' => ["default/BONJOUR/zone1.png"],
            'card_id' => 0,
            'card_picture' => 'default/BONJOUR/carte.jpg',
            'thematic_id' => 4
        ]);
        // BONJOUR
        Item::create([
            'name' => 'AUREVOIR',
            'medias' => ["default/AUREVOIR/zone1.png"],
            'card_id' => 0,
            'card_picture' => 'default/AUREVOIR/carte.jpg',
            'thematic_id' => 5
        ]);


        // ALIMENTATION
        Item::create([
            'name' => 'alimentation',
            'medias' => ["default/ALIMENTATION/zone1.png"],
            'card_id' => 0,
            'card_picture' => 'default/ALIMENTATION/carte.jpg',
            'thematic_id' => 1
        ]);
        Item::create([
            'name' => 'feculents_viandes_sucres_gras',
            'medias' => [
                "default/ALIMENTATION/feculents_viandes_sucres_gras/zone1.png",
                "default/ALIMENTATION/feculents_viandes_sucres_gras/zone2.png", 
                "default/ALIMENTATION/feculents_viandes_sucres_gras/zone3.png", 
                "default/ALIMENTATION/feculents_viandes_sucres_gras/zone4.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/ALIMENTATION/feculents_viandes_sucres_gras/carte.jpg',
            'thematic_id' => 1
        ]);
        Item::create([
            'name' => 'fruits_legumes',
            'medias' => [
                "default/ALIMENTATION/fruits_legumes/zone1.png",
                "default/ALIMENTATION/fruits_legumes/zone2.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/ALIMENTATION/fruits_legumes/carte.jpg',
            'thematic_id' => 1
        ]);
        Item::create([
            'name' => 'lait_artificiel',
            'medias' => [
                "default/ALIMENTATION/lait_artificiel/zone1.png",
                "default/ALIMENTATION/lait_artificiel/zone2.png",
                "default/ALIMENTATION/lait_artificiel/zone3.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/ALIMENTATION/lait_artificiel/carte.jpg',
            'thematic_id' => 1
        ]);
        Item::create([
            'name' => 'positions_allaitement',
            'medias' => [
                "default/ALIMENTATION/positions_allaitement/zone1.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/ALIMENTATION/positions_allaitement/carte.jpg',
            'thematic_id' => 1
        ]);
        Item::create([
            'name' => 'problemes_alimentaires',
            'medias' => [
                "default/ALIMENTATION/problemes_alimentaires/zone1.png",
                "default/ALIMENTATION/problemes_alimentaires/zone2.png", 
                "default/ALIMENTATION/problemes_alimentaires/zone3.png", 
                "default/ALIMENTATION/problemes_alimentaires/zone4.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/ALIMENTATION/problemes_alimentaires/carte.jpg',
            'thematic_id' => 1
        ]);
        Item::create([
            'name' => 'selles_urine_regurgitation',
            'medias' => [
                "default/ALIMENTATION/selles_urine_regurgitation/zone1.png",
                "default/ALIMENTATION/selles_urine_regurgitation/zone2.png", 
                "default/ALIMENTATION/selles_urine_regurgitation/zone3.png", 
                "default/ALIMENTATION/selles_urine_regurgitation/zone4.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/ALIMENTATION/selles_urine_regurgitation/carte.jpg',
            'thematic_id' => 1
        ]);

        // SANTE
        Item::create([
            'name' => 'sante',
            'medias' => [
                "default/SANTE/zone1.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/carte.jpg',
            'thematic_id' => 3
        ]);
        Item::create([
            'name' => 'accouchement',
            'medias' => [
                "default/SANTE/accouchement/zone1.png",
                "default/SANTE/accouchement/zone2.png", 
                "default/SANTE/accouchement/zone3.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/accouchement/carte.jpg',
            'thematic_id' => 3
        ]);
        Item::create([
            'name' => 'asthme_allergies',
            'medias' => [
                "default/SANTE/asthme_allergies/zone1.png",
                "default/SANTE/asthme_allergies/zone2.png", 
                "default/SANTE/asthme_allergies/zone3.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/asthme_allergies/carte.jpg',
            'thematic_id' => 3
        ]);
        Item::create([
            'name' => 'douleurs_fievre',
            'medias' => [
                "default/SANTE/douleurs_fievre/zone1.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/douleurs_fievre/carte.jpg',
            'thematic_id' => 3
        ]);
        Item::create([
            'name' => 'grossesse',
            'medias' => [
                "default/SANTE/grossesse/zone1.png",
                "default/SANTE/grossesse/zone2.png", 
                "default/SANTE/grossesse/zone3.png",
                "default/SANTE/grossesse/zone4.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/grossesse/carte.jpg',
            'thematic_id' => 3
        ]);
        Item::create([
            'name' => 'hanche',
            'medias' => [
                "default/SANTE/hanche/zone1.png",
                "default/SANTE/hanche/zone2.png", 
                "default/SANTE/hanche/zone3.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/hanche/carte.jpg',
            'thematic_id' => 3
        ]);
        Item::create([
            'name' => 'hygiene',
            'medias' => [
                "default/SANTE/hygiene/zone1.png",
                "default/SANTE/hygiene/zone2.png", 
                "default/SANTE/hygiene/zone3.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/hygiene/carte.jpg',
            'thematic_id' => 3
        ]);
        Item::create([
            'name' => 'medication',
            'medias' => [
                "default/SANTE/medication/zone1.png",
                "default/SANTE/medication/zone2.png", 
                "default/SANTE/medication/zone3.png",
                "default/SANTE/medication/zone4.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/medication/carte.jpg',
            'thematic_id' => 3
        ]);
        Item::create([
            'name' => 'problemes_cutanes',
            'medias' => [
                "default/SANTE/problemes_cutanes/zone1.png",
                "default/SANTE/problemes_cutanes/zone2.png", 
                "default/SANTE/problemes_cutanes/zone3.png",
                "default/SANTE/problemes_cutanes/zone4.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SANTE/problemes_cutanes/carte.jpg',
            'thematic_id' => 3
        ]);

        // SOMMEIL
        Item::create([
            'name' => 'sommeil',
            'medias' => [
                "default/SOMMEIL/zone1.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SOMMEIL/carte.jpg',
            'thematic_id' => 2
        ]);
        Item::create([
            'name' => 'lits_accessoires',
            'medias' => [
                "default/SOMMEIL/lits_accessoires/zone1.png",
                "default/SOMMEIL/lits_accessoires/zone2.png", 
                "default/SOMMEIL/lits_accessoires/zone3.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SOMMEIL/lits_accessoires/carte.jpg',
            'thematic_id' => 2
        ]);
        Item::create([
            'name' => 'phases_sommeil',
            'medias' => [
                "default/SOMMEIL/phases_sommeil/zone1.png",
                "default/SOMMEIL/phases_sommeil/zone2.png", 
                "default/SOMMEIL/phases_sommeil/zone3.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SOMMEIL/phases_sommeil/carte.jpg',
            'thematic_id' => 2
        ]);
        Item::create([
            'name' => 'securite_lit',
            'medias' => [
                "default/SOMMEIL/securite_lit/zone1.png",
                "default/SOMMEIL/securite_lit/zone2.png", 
                "default/SOMMEIL/securite_lit/zone3.png"
            ],
            'card_id' => 0,
            'card_picture' => 'default/SOMMEIL/securite_lit/carte.jpg',
            'thematic_id' => 2
        ]);
    }
}
