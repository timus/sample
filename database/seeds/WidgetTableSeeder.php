<?php

use Illuminate\Database\Seeder;
use App\Widget;




// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class WidgetTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post'


        $widget = new Widget();
        $widget->widget_id = "geo";
        $widget->name = "Geolocation";
		$widget->save();

		$widget = new Widget();
		$widget->widget_id = "events";
        $widget->name = "Events";
		$widget->save();

		$widget = new Widget();
		$widget->widget_id = "staff";
        $widget->name = "Staff";
		$widget->save();








    }

}