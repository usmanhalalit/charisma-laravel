<?php
class Charisma_Base_Controller extends Controller {

	public $layout = 'charisma::layouts.index';
	
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}
