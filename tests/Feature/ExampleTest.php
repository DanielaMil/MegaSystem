<?php

namespace Tests\Feature;

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
        $response = $this->get('Pagos/');

        $response->assertStatus(404);
    }

    public function testbloquearMatricula()
    {
        $response = $this->get('MatriculaFrm/');

        $response->assertStatus(404);
    }
    
    public function testValidarImporte()
    {
        $response = $this->get('MatriculaFrm/');

        $response->assertStatus(404);
    }
}
