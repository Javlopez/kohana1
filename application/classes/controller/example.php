<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Example extends Controller {

	public function action_index()
	{
            $view = View::factory("index")
            				->set("loginurl",Route::url('default',array('controller' => 'backend', 'action' => FALSE)));
            $this->response->body($view);
	}

} // End Welcome
