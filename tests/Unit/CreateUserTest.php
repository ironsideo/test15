<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class CreateUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(\App\Users::class)->create([ 'is_seed' => 0]);

        $result = (isset($user->email) && $user->email!='' )?true:false;
        $this->assertTrue($result );
    }
}
