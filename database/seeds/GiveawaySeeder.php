<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GiveawaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Giveaway::create([
            'ends_at' => Carbon::parse('June 15, 2018'),
            'image' => 'images/dgr-giveaway-grill.png',
            'title' => 'Weber Spirit Model # E-210',
            'product_image' => 'images/meat.jpg',
            'product_image_2' => 'images/Giveaway Grill 2.jpg',
            'product_image_3' => 'images/Giveaway Grill 3.jpg',
            'product_image_4' => 'images/Giveaway Grill 4.jpg',

            'description' => "Open your door to the world of grilling with this awesome Weber Spirit 
            E-210 gas grill. This two burner grill is built to fit small spaces, and packed with 
            features such as the powerful GS4 grilling system, iGrill capability, and convenient 
            side tables for placing serving trays.",

            'features' => 'Liquid propane gas grill with easy-to-clean porcelain-enameled shroud
450-sq in total cooking area: 360-sq in primary and 90-sq in warming rack
Porcelain-coated cast-iron cooking grates retain heat for even grilling and superior searing
Two stainless steel main burners are durable
Electronic ignition for fast and reliable startups
Folding side shelves with integrated tool hooks keep utensils and condiments close by
Front-mounted control knobs give you precise heat control
Fuel gauge monitors fuel level, taking the guesswork out of grilling
10-year limited grill warranty on lid, cookbox and burner',
        ]);

        App\PreviousGiveaway::create([
            'title' => 'Congratulations to our previous winner',
            'content' => 'We are very proud to present the Wallace Family with their Brand New 49" Ultra HD 4K Toshiba TV!',
            'image' => 'images/Giveaway-Wallace.jpg'
        ]);
    }
}
