<?php

class Logout extends Dcontroller
{

    public function __construct()
    {
        Session::init();
        Session::destroy();
        header("Location:" . BASE_URL);
    }
}