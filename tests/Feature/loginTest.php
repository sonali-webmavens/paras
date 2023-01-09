<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class loginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_view_load()
    {
        $response = $this->get('/en/login');

        $response->assertStatus(200);
    }

    public function test_user_login_with_email_and_password()
    {
        $user = User::factory()->create();

        $this->post('/en/login',[
            'email'     => $user -> email,
            'password'  => 'password'
        ]);

        $this -> assertAuthenticated();
    }
}
