<?php

namespace Tests\Unit\Models;

use App\Models\Repository;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_belongs_to_user(): void
    {
        $repository = Repository::factory()->create();
        $this->assertInstanceOf(User::class, $repositories->user);
    }
}
