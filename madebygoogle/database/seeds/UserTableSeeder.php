<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create([
            'name' => 'Evert Kruis',
            'email' => 'evert@googleshop.test',
            'password' => bcrypt('secret')])
            ->each(function (User $user) {
                $user->assignRole('owner');

            });

        factory(User::class, 1)->create([
            'name' => 'Marcel Koningstein',
            'email' => 'marcel@mail.test',
            'password' => bcrypt('secret')])
                ->each(function (User $user) {
                    $user->assignRole('customer');
                });
    }
}

