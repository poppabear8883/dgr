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
        $user = User::create([
            'username' => 'Mike.Wiley',
            'password' => bcrypt('secret'),
            'email' => 'servnx@gmail.com'
        ]);

        $user->profile()->create([
            'name' => 'Mike Wiley',
            'address' => '232 Wiesen Ln',
            'city' => 'Moraine',
            'state' => 'Ohio',
            'zip' => '45439',
            'county' => 'Montgomery',
            'primary_phone' => '(937) 555-1234'
        ]);

        $user->assignRole('owner');

        // Lets generate soem dummy data for testing
        factory(Profile::class, 20)->create();
    }
}
