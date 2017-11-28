<?php

use App\Profile;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Mike.Wiley',
            'password' => bcrypt('secret'),
            'email' => 'servnx@gmail.com'
        ])->profile()->create([
            'name' => 'Mike Wiley',
            'address' => '232 Wiesen Ln',
            'city' => 'Moraine',
            'state' => 'Ohio',
            'zip' => '45439',
            'county' => 'Montgomery',
            'primary_phone' => '9375801999'
        ]);

        factory(Profile::class, 20)->create();
    }
}
