<?php

namespace Tests\Feature;

use App\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase {
    
    use RefreshDatabase;
    
    /** @test */
    
    public function testExample () {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    //READ
    public function test_see_all_users () {
        $users = factory(User::class, 5)->create();
        
        $response = $this->get('/users');

        $response->assertStatus(200);
        $response->assertSee($users[0]->username);
    }
    
    //UPDATE
    public function test_user_update () {
        $user = factory(User::class)->create();
        
        $response = $this->get('/users/update/' . $user->id);
        $response->assertSee($user->username);
        $response = $this->post('/users/update/' . $user->id);
    }
    //CREATE
    public function test_user_sign_up () {
        $response = $this->get('/sign-up');
        $response->assertStatus(200);
        $response->assertSee('Sign Up');
    }
    //DELETE
    public function test_user_delete () {
        $user = factory(User::class)->create();
        
        $response = $this->post('/users/delete/' . $user->id);
        $response->assertRedirect('/sign-up');
    }
}
