<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VideoTest extends TestCase
{
    /**
     * @return void
     */
    public function users_can_view_videos()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
