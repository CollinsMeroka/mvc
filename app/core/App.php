<?php

class App {

    protected $controller= 'home';

    protected $method = 'index';

    protected $params = [];

    public function __construct()
    {
        $this->parseUrl();
    }
    public function parseUrl()
    {
        if(isset($_Get['url'])){
            echo $_Get['url'];

        }
    }
}
