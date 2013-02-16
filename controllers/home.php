<?php

class Charisma_Home_Controller extends Charisma_Base_Controller {
	
	public function action_index($view = 'index.html')
	{
		$view_str = 'charisma::pages.' . current(explode('.', $view));
		$this->layout->nest('content', $view_str);
	}
}
