<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WidgetTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testOneWidget()
    {
         $response = $this->call('GET', 'widget/10');

    	 $this->assertEquals(200, $response->status());
    }


}
