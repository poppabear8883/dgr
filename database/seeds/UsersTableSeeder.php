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
        $this->createGerri();
        $this->createAmanda();
        $this->createMike();
    }

    private function createGerri(): void
    {
        $user = User::create([
            'username' => 'GerriH',
            'password' => bcrypt('heGrg3rYuZQ923yk'),
            'email' => 'gerri.dgroofing@gmail.com'
        ]);

//        $user->profile()->create([
//            'name' => 'Gerri Howard',
//            'address' => '123 street ln',
//            'city' => 'Moraine',
//            'state' => 'Ohio',
//            'zip' => '45439',
//            'county' => 'Montgomery',
//            'primary_phone' => '(937) 555-1234'
//        ]);

        $user->assignRole('owner');
    }

    private function createAmanda(): void
    {
        $user = User::create([
            'username' => 'AmandaW',
            'password' => bcrypt('secret'),
            'email' => 'amanda.dgroofing@gmail.com'
        ]);

        $user->assignRole('admin');
    }

    private function createMike(): void
    {
        $user = User::create([
            'username' => 'MikeW',
            'password' => bcrypt('2ttySnTrBQuXyHSk'),
            'email' => 'servnx@gmail.com'
        ]);

        $user->assignRole('admin');
    }
}
