<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Widget;
use Illuminate\Http\Request;

class WidgetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getAllWidgets()
	{
		$widgets = Widget::orderBy('id', 'desc')->paginate(10);

		return $widgets;
	}

	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getWidget($id)
	{
		$widget = Widget::findOrFail($id);

		return $widget;
	}

	
}
