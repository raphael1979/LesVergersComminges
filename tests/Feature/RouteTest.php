<?php

namespace Tests\Feature;

use Tests\BrowserKitTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends BrowserKitTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testroute()
    {
    	$this->visit('/determination')
    	->see('determination');


    	$this->visit('/creation')
    	->see('creation');
    }
}
