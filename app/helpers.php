<?php

use App\Models\Team;
use App\Models\User;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

if(! function_exists('create_default_user()')){
    function create_default_user()
    {
        $user = User::create([
            'name' => config('casteaching.default_user.name','Sergi Casado'),
            'email' => config('casteaching.default_user.email','sergicasado1@iesebre.com'),
            'password' => Hash::make(config('casteaching.default_user.password'))
        ]);


        try{
            Team::create([
                'name' => $user->name . "'s Team",
                'user_id' => $user->id,
                'personal_team' => true
            ]);
        } catch (\Exception $exception){

        }


    }
}



if(! function_exists('create_default_user2()')){
    function create_default_user2()
    {
        $user2 = User::create([
            'name' => config('casteaching.default_user2.name','Sergi Tur Badenas'),
            'email' => config('casteaching.default_user2.email','sergiturbadenas@gmail.com'),
            'password' => Hash::make(config('casteaching.default_user2.password'))
        ]);

        try {
            Team::create([
                'name' => $user2->name . "'s Team",
                'user_id' => $user2->id,
                'personal_team' => true
            ]);
        } catch (\Exception $exception){

        }
    }
}


if(! function_exists('create_default_videos()')) {
    function create_default_videos()
    {
        Video::create([
            'title' => 'Ubuntu 101',
            'description' => '# Here description',
            'url' => 'https://youtu.be/w8j07_DBl_I',
            'published_at' => Carbon::parse('December 13, 2020 8:00pm'),
            'previous' => null,
            'next' => null,
            'series_id' => 1
        ]);
    }
}

if(! function_exists('create_default_user')){
    function create_superadmin_user(){
        $user = User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@casteaching.com',
            'password' => Hash::make('12345678'),
            'superadmin' => true
        ]);
        $user->superadmin=true;
        $user->save();
        return $user;
    }
}


if (! function_exists('create_superadmin_user')) {
    function create_superadmin_user() {
        $user = User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@casteaching.com',
            'password' => Hash::make('12345678')
        ]);
        $user->superadmin = true;
        $user->save();

        add_personal_team($user);

        return $user;
    }
}

if (! function_exists('add_personal_team')) {
    /**
     * @param $user
     */
    function add_personal_team($user): void
    {
        try {
            Team::forceCreate([
                'name' => $user->name . "'s Team",
                'user_id' => $user->id,
                'personal_team' => true
            ]);
        } catch (\Exception $exception) {
//            dd($exception->getMessage());
        }
    }
}

if(! function_exists('create_default_user2()')){
    function define_gates(){

        Gate::define('videos_manage_create', function (User $user){
            if ($user->isSuperAdmin()) return true;
            return false;
        });
    }
}

//Gate::define('videos_manage_create', function (User $user){
//    if ($user->isSuperAdmin()) return true;
//    return false;
//});







