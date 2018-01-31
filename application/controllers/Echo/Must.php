<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Must extends Application
{

	/**
	 * Homepage for our app
	 */
	public function wehave() {
        $this->show(5);
    }

}
