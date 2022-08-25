<?php

namespace Aer\controllers;

class Controller {
	public function viewFrontend($view): string	{
		return 'app/views/frontend/' . $view . '.php';
	}

	public function viewAdmin($view): string {
		return 'app/views/admin/' . $view . '.php';
	}
}
