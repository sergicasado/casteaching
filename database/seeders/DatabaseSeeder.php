<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Video;
use Carbon\Carbon;
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
        create_default_user();
        create_default_videos();
        create_default_user2();
        create_superadmin_user();
        create_regular_user();
        create_permissions();
        create_video_manager_user();
    }


}
