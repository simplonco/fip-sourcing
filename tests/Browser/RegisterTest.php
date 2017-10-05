<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class RegisterTest extends DuskTestCase
{
  use DatabaseMigrations;

  public function testRegistrationPossible()
  {
    $this->browse(function (Browser $browser) {
      $browser->visit('/')
      ->assertSee(__('auth.register'));
    });
  }

  public function testRegistration()
  {
    $this->browse(function (Browser $browser) {
      $browser->visit('/')
      ->clickLink(__('auth.register'))
      ->type('first_name', 'Bob')
      ->type('last_name', 'Tester')
      ->type('email', 'bob@tester.com')
      ->type('password', 'azerty')
      ->type('password_confirmation', 'azerty')
      ->press(__('general.submit'))
      ->assertPathIs('/home');
    });
  }

  // public function testChooseFormation()
  // {
  //   $this->browse(function (Browser $browser) {
  //     $browser->loginAs(User::find(2))
  //     ->visit('/home')
  //     ->clickLink(__('candidate_panel.formation'))
  //     ->assertPathIs('/candidate/formation')
  //     ->assertSee('WebDev1')
  //     ->clickLink(__('general.select'))
  //     ->assertPathIs('/home')
  //     ->assertSee('WebDev1')
  //     ->assertSee(__('candidate_panel.operationnal'))
  //     ->assertSee(__('candidate_panel.administrative'))
  //     ->assertSee(__('candidate_panel.experience'))
  //     ->assertSee(__('candidate_panel.coding'))
  //     ->assertSee(__('candidate_panel.projection'))
  //     ->assertSee(__('candidate_panel.send'))
  //     ;
  //   });
  // }
}
