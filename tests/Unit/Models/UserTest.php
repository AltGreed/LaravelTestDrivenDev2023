<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Database\eloquent\Collection;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_has_many_repositories(): void
    {
        $user = new User;
        $this->assertInstanceOf(Collection::class, $user->repositories);

    }
}
