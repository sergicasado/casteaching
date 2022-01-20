<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /**
     * @test
     */
    public function create_default_user()
    {
        create_default_user();
    }
}
