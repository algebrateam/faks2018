<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ZupanijaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testZupanijaLista()
    {
      $response = $this->get('/zupanija');

        $response->assertStatus(200);
        $response->assertSee('Emilia Cliffs');
        $response->assertSee('Hintz Pines');
        $response->assertSee('Renner Extension');
        $response->assertSee('Lupe Wall');
        
      //$z=Zupanija::findorfail(22)->naziv;  
      //$this->assertEquals($z,'Emilia Cliffs');
    }
        /**
     * A basic test example.
     *
     * @return void
     */
    public function testZupanijaCRUD()
    {
      $response = $this->get('/zupanija');

        $response->assertStatus(200);
        $response->assertSee('Jayne Shoal');
        $response->assertDontSee('Error');
        $response->assertDontSee('Greška');
      //$z=Zupanija::findorfail(22)->naziv;  
      //$this->assertEquals($z,'Emilia Cliffs');
    }
}
