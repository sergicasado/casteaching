<?php

namespace Tests\Feature\Videos;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VideoApiTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
