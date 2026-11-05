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

        $response->assertStatus(200);
        $response->assertViewIs('reportes.listado-reportes');
        $response->assertViewHas('reportes');
    }
};
test('usuario puede crear nuevos reportes   ', function () {
    $user = User::factory()->create();
    Reporte::factory()->count(3)->create(['user_id' => $user->id]);

    $response = $this->actingAs($user)->get('/reportes');

    $response->assertStatus(200);
    $response->assertViewIs('reportes.listado-reportes');
    $response->assertViewHas('reportes');
});

test('usuario puede eliminar un reporte', function () {
    $user = User::factory()->create();  
    $reporte = Reporte::factory()->create(['user_id' => $user->id]);   

    $response = $this->actingAs($user)->delete("/reportes/{$reporte->id}");

    $response->assertStatus(302); // Redirección después de eliminar
    $this->assertDatabaseMissing('reportes', ['id' => $reporte->id]);
});
test('usuario puede ver un reporte específico', function () {
    $user = User::factory()->create();  
    $reporte = Reporte::factory()->create(['user_id' => $user->id]);   

    $response = $this->actingAs($user)->get("/reportes/{$reporte->id}");

    $response->assertStatus(200);
    $response->assertViewIs('reportes.ver-reporte');
    $response->assertViewHas('reporte', $reporte);
});
test('usuario puede ver la lista de reportes', function () {
    $user = User::factory()->create();   
    Reporte::factory()->count(3)->create(['user_id' => $user->id]);

    $response = $this->actingAs($user)->get('/reportes');

    $response->assertStatus(200);
    $response->assertViewIs('reportes.listado-reportes');
    $response->assertViewHas('reportes');
});
test('usuario puede ver la lista de reportes filtrados por estado', function () {
    $user = User::factory()->create();   
    Reporte::factory()->count(3)->create(['user_id' => $user->id, 'estado' => 'pendiente']);
    Reporte::factory()->count(2)->create(['user_id' => $user->id, 'estado' => 'completado']);

    $response = $this->actingAs($user)->get('/reportes?estado=pendiente');

    $response->assertStatus(200);
    $response->assertViewIs('reportes.listado-reportes');
    $response->assertViewHas('reportes', function ($reportes) {
        return $reportes->every(fn ($reporte) => $reporte->estado === 'pendiente');
    });
});
test('usuario puede editar un reporte', function () {
    $user = User::factory()->create();  
    $reporte = Reporte::factory()->create(['user_id' => $user->id]);   

    $response = $this->actingAs($user)->get("/reportes/{$reporte->id}/edit");

    $response->assertStatus(200);
    $response->assertViewIs('reportes.editar-reporte');
    $response->assertViewHas('reporte', $reporte);
});
test('usuario no puede ver reportes de otros usuarios', function () {
    $user1 = User::factory()->create();  
    $user2 = User::factory()->create();  
    $reporte = Reporte::factory()->create(['user_id' => $user2->id]);   

    $response = $this->actingAs($user1)->get("/reportes/{$reporte->id}");

    $response->assertStatus(403); // Forbidden
});
test('usuario no puede eliminar reportes de otros usuarios', function () {
    $user1 = User::factory()->create();  
    $user2 = User::factory()->create();  
    $reporte = Reporte::factory()->create(['user_id' => $user2->id]);

    $response = $this->actingAs($user1)->delete("/reportes/{$reporte->id}");
    $response->assertStatus(403); // Forbidden
    $this->assertDatabaseHas('reportes', ['id' => $reporte->id]); // El reporte aún existe
});
