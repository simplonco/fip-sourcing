<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FetchSoloLearnXPTest extends TestCase
{
  /**
  * A basic test example.
  *
  * @return void
  */
  public function testGoodURL()
  {
    $url = 'https://www.sololearn.com/Profile/4287114';

    $this->assertNotEmpty(fetchBadges($url));

  }
}
