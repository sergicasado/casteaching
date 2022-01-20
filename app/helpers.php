<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

if(! function_exists('create_default_user()')){
    function create_default_user()
    {
        User::create([
            'name' => config('casteaching.default_user.name','Sergi Casado'),
            'email' => config('casteaching.default_user.email','sergicasado1@iesebre.com'),
            'password' => Hash::make(config('casteaching.default_user.password'))
        ]);

    }
}
