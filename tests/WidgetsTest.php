<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WidgetsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testallWidget()
    {
         $response = $this->call('GET', 'widgets/all');

    	 $this->assertEquals(200, $response->status());
    }


}
