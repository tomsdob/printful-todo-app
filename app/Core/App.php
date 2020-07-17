<?php

class App
{
    // Defines the default values
    protected $Controller = 'HomeController';
    protected $Action = 'index';
    protected $Parameters = [];

    public function __construct()
    {
        $this->prepareUrl();
//        echo $this->Controller, '<br>', $this->Action, '<br>',  print_r($this->Parameters), print_r(ROOT);

        // Checking if the Controller exists, if not, it reverts to the default - HomeController
        if (file_exists(CONTROLLERS . $this->Controller . '.php')) {
            $this->Controller = new $this->Controller;
            // Checking if the parameters exist
            if (method_exists($this->Controller, $this->Action)) {
                call_user_func_array([$this->Controller, $this->Action], $this->Parameters);
            }
        }
    }

    protected function prepareUrl()
    {
        $request = trim($_SERVER['REQUEST_URI'], '/');
        if (!empty($request)) {
            $url = explode('/', $request);
            $this->Controller = isset($url[0]) ? $url[0] . 'Controller' : 'HomeController';
            $this->Action = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->Parameters = !empty($url) ? array_values($url) : [];
        }
    }
}
