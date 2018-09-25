<?php

use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries = [
            'Roofing' => 'A gallery of roofing related photos',
            'Windows' => 'A gallery of windows related photos',
            'Siding' => 'A gallery of siding related photos',
            'Gutters' => 'A gallery of gutters related photos',
            'Doors' => 'A gallery of doors related photos',
            'Commercial' => 'A gallery of commercial related photos',
            'Community' => 'A gallery of community related photos'
        ];

        foreach ($galleries as $name => $desc) {
            App\Gallery::create(['name' => $name, 'description' => $desc]);
        }
    }
}
