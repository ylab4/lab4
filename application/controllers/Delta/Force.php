<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Force extends Application
{
	/**
	 * Homepage for our app
	 */
	public function index() {
        $this->show(4);
    }
}
