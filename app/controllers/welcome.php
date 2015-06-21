<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index method 
     *
     * @return View
     */
    public function index()
    {
        View::make('welcome_message', ['title' => 'Welcome to CI-Starter!']);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */