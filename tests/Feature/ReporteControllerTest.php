<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReporteControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example('Puede ver la lista de reportes'): void
    {
        $user = User::factory()->create();   
        Reporte::factory()->count(3)->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->get('/reportes');

        $response->assertStatus(200);-> assertViewIs('reportes.listado-reportes') -> assertViewHas('reportes');
        ->assertSe
    }
}
