<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

use function PHPUnit\Framework\assertJson;

class UserTest extends TestCase
{

    public function test_set_database_config()
    {
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('db:seed');

        $response = $this->get('/');
        $response->assertStatus(200);
    }
    /**
     * A basic feature test example.
     */
    public function test_get_users_list()
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);

        // comprobamos la estructura de la tabla user
        $response->assertJsonStructure([
            ['id', 'name', 'email', 'created_at', 'updated_at']
        ]);

        // comprobamos que devuelva lo que sabemos que esta en el campo name de la tabla user
        $response->assertJsonFragment(['name' => 'Jorge']);

        // comprobamos que devuelva la cantidad de registros de la tabla user
        $response->assertJsonCount(4);
    }

    public function test_get_user_detail()
    {
        $response = $this->get('/api/users/1');
        $response->assertStatus(200);
        $response->assertJsonStructure(
            ['id', 'name', 'email', 'created_at', 'updated_at']
        );
        $response->assertJsonFragment(['name' => 'Jorge']);
    }

    public function test_get_non_existing_user_detail()
    {
        $response = $this->get('/api/users/111');
        $response->assertStatus(404);
    }
}