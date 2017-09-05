<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\User;

class ExampleTest extends DuskTestCase
{
  /**
  * A basic browser test example.
  *
  * @return void
  */
  public function testBasicExample()
  {
    $this->browse(function (Browser $browser) {
      $browser->visit('/login')
      ->assertSee('Simplon Sourcing');
    });
  }

  public function testConnection() {
    $user = User::find(2);
    $this->browse(function ($browser) use ($user) {
      $browser->visit('/login')
      ->type('email', $user->email)
      ->type('password', 'azerty')
      ->press('Login')
      ->assertPathIs('/home');
    });
  }
}
