<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{
  /**
  * A basic test example.
  *
  * @return void
  */
  public function testAdminExists()
  {
    $this->assertDatabaseHas('users', [
      'email' => 'admin@admin.com'
    ]);

  }
}
