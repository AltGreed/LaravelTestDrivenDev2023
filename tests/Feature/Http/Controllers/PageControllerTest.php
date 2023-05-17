<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Repository;

use Tests\TestCase;

class PageControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_home(): void
    {
        $repository = Repository::factory()->create();

        $this
            ->get('/')
            ->assertStatus(200)
            ->assertSee($repository->url)
            ->assertSee($repository->description);

    
    }
}
