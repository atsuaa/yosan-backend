<?php

namespace Tests\Feature\Http\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_OK()
    {
        $response = $this->get('/api/tags');
        $response->dump();

        $response->assertStatus(200)
        ->assertJson([]);
    }
}