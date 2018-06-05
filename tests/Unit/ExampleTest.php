<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    public function testzbrojimiovo($a=3,$b=2){
        $rez=$a+$b;
        $this->assertEquals($a+$b,$rez);
    }
}
