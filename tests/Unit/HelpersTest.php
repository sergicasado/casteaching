<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class HelpersTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function create_default_user()
    {
        create_default_user();

        $this->assertDatabaseCount('users', 1);

        $this->assertDatabaseHas('users', [
            'email' => config('casteaching.default_user.email',),
        ]);

        $this->assertDatabaseHas('users', [
            'name' => config('casteaching.default_user.name'),
        ]);

        $user = User::find(1);

        $this->assertNotNull($user);
        $this->assertEquals(config('casteaching.default_user.email'), $user->email);
        $this->assertEquals(config('casteaching.default_user.name'), $user->name);

        $this->assertTrue(Hash::check('plain-text', $user->password));


    }
}
