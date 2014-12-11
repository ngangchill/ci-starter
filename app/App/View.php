<?php namespace App;

use Philo\Blade\Blade;

class View {

    /**
     * View constructer for create blade instance
     *
     * @return null
     */
    public function __construct()
    {
        $this->engine = new Blade(
                APPPATH.'/views', 
                APPPATH.'/cache'
            );
    }

    /**
     * Render page 
     *
     * @param  string       $file 
     * @param  array        $arguments 
     * @return null
     */
    public function make($file, $arguments = array())
    {
        echo $this->engine->view()->make($file, $arguments);
    }

}