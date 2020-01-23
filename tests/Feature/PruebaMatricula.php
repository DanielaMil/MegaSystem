<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PruebaMatricula extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('MatriculaFrm/');

        $response->assertStatus(404);
    }

    public function bloquearMatricula()
    {
        $response = $this->get('Matricula/');

        $response->assertStatus(404);
    }
}
