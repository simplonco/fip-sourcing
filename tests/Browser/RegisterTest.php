<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

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
}
