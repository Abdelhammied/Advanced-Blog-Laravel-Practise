<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->isLogout();
    }

    protected function isLogout()
    {
        $response = $this->get(env("ADMIN_URL") . '/dashboard');

        $response->assertStatus(302);
    }
}
