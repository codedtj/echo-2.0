<?php

use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Sultonazar',
            'last_name' => 'Mamadazizov',
            'patronymic' => 'Shodievich',
            'email' => 'sultonazar.mamadazizov@mail.ru',
            'password' => Hash::make('Dhtvtyysq92')
        ]);

        User::create([
            'name' => 'Nekruz',
            'last_name' => 'Dastambuev',
            'patronymic' => null,
            'email' => 'test@test.com',
            'password' => Hash::make('YtrRekWd23')
        ]);

        User::create([
            'name' => 'Далер',
            'last_name' => 'Назаров',
            'patronymic' => 'Мехрубонович',
            'email' => 'test2@test.com',
            'password' => Hash::make('YtrRekWd23')
        ]);
    }
}
