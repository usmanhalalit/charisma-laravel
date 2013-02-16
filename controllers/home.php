<?php

class Charisma_Home_Controller extends Charisma_Base_Controller {
	
	public function action_index($view = 'index.html')
	{
		// Get rid of `.html` and prepend bundle and folder name
		$view_str = 'charisma::pages.' . current(explode('.', $view));
		// Load the view by the given parameter
		$this->layout->nest('content', $view_str);
	}
}
