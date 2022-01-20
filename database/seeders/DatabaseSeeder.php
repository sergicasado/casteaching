<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Sergi Casado',
            'email' => 'sergicasado1@iesebre.com',
            'password' => Hash::make(config('casteaching.default_user.password'))
        ]);

        User::create([
            'name' => 'Sergi Tur',
            'email' => 'sergiturbadenas@gmail.com',
            'password' => Hash::make(config('casteaching.default_user.password'))
        ]);

    }


}
