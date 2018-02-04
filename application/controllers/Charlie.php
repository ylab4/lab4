<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charlie extends Application
{

    /**
     * Homepage for our app
     */
    public function brown() {
        $this->show(3);
    }

}
