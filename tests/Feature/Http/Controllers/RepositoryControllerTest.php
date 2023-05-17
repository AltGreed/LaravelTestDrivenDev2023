<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Repository;

class RepositoryControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     use WithFaker;
     use RefreshDatabase;

    public function test_guest(): void
        {
        $this->get('repositories')->assertRedirect('login');
        $this->get('repositories/1')->assertRedirect('login');
        $this->get('repositories/1/edit')->assertRedirect('login');
        $this->get('repositories/create')->assertRedirect('login');
        $this->put('repositories/1')->assertRedirect('login');
        $this->post('repositories' , [])->assertRedirect('login');
        $this->delete('repositories/1')->assertRedirect('login');
        
        }

        public function test_store(){
            $data = [
                'url' => $this->faker->url,
                'description' => $this->faker->text,


            ];

            $user = User::factory()->create();

            $this
                ->actingAs($user)
                ->post('repositories', $data)
                ->assertRedirect('repositories');

                $this->assertDatabaseHas('repositories', $data);
        }

        public function test_update(){
            $repository = Repository::factory()->create();
            $data = [
                'url' => $this->faker->url,
                'description' => $this->faker->text,


            ];

            $user = User::factory()->create();

            $this
                ->actingAs($user)
                ->put("repositories/$repository->id", $data)
                ->assertRedirect("repositories/$repository->id/edit");

                $this->assertDatabaseHas('repositories', $data);
        }
}
