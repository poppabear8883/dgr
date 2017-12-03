<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsSeeder::class);
        $this->call(UsersTableSeeder::class);

        factory(App\Contact::class, 100)->create();

        App\Gallery::create(['name' => 'Roofing', 'description' => 'A gallery of roofing related photos']);
        App\Gallery::create(['name' => 'Windows', 'description' => 'A gallery of windows related photos']);
        App\Gallery::create(['name' => 'Gutters', 'description' => 'A gallery of gutters related photos']);
    }
}
