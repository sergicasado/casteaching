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
        //FASE 1 -> Preparació -> Prepare

        //FASE 2 -> Execució -> Executa el codi a provar

        //Laravel HTTP TESTS ->
        $response = $this->get('/videos/1');

        $response->assertStatus(200);
    }
}
