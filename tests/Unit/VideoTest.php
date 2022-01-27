<?php

namespace Tests\Unit;

use App\Models\Video;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
    /** @test **/
    public function cant_get_formatted_date()
    {
        //1 Preparacio
        //TODO code smell
        $video = Video::create([
            'title' => 'Ubuntu 101',
            'description' => '# Here description',
            'url' => 'https://youtu.be/w8j07_DBl_I',
            'published_at' => Carbon::parse('December 13, 2020 8:00pm'),
            'previous' => null,
            'next' => null,
            'series_id' => 1
        ]);

        //2 Execució WISHFUL PROGRAMMING
        $dateToTest = $video->formatted_published_at;

        //3 comprovació
        $this->assertEquals($dateToTest,'13 de desembre de 2020');
    }
}
