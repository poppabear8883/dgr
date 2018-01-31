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
        $this->createStaging();

        $this->createGerri();
        $this->createMike();

        // Lets generate some dummy data for testing
        factory(Profile::class, 20)->create();
    }

    private function createStaging()
    {
        $user = User::create([
            'username' => 'staging',
            'password' => bcrypt('secret'),
            'email' => 'staging@email.com'
        ]);

        $user->profile()->create([
            'name' => 'Staging Account',
            'address' => '123 street ln',
            'city' => 'Moraine',
            'state' => 'Ohio',
            'zip' => '45439',
            'county' => 'Montgomery',
            'primary_phone' => '(937) 555-1234'
        ]);

        $user->assignRole('owner');
    }

    private function createGerri(): void
    {
        $user = User::create([
            'username' => 'Gerri.Howard',
            'password' => bcrypt('secret'),
            'email' => 'gerri.dgroofing@gmail.com'
        ]);

        $user->profile()->create([
            'name' => 'Gerri Howard',
            'address' => '123 street ln',
            'city' => 'Moraine',
            'state' => 'Ohio',
            'zip' => '45439',
            'county' => 'Montgomery',
            'primary_phone' => '(937) 555-1234'
        ]);

        $user->assignRole('owner');
    }

    private function createMike(): void
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

        $user->assignRole('admin');
    }
}
