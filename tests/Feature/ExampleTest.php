<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(302);

        $response->assertRedirect('/login');
    }

    // public function testAuthentication()
    // {
    //     $user = factory(User::class)->create();
    //
    //     $response = $this->actingAs($user)
    //                      ->withSession(['foo' => 'bar'])
    //                      ->get('/');
    // }
}
