<?php

namespace Tests\Unit;
use App\Zupanija;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ZupanijaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
      $z=Zupanija::findorfail(22)->naziv;  
      $this->assertEquals($z,'Emilia Cliffs');
    }
}
