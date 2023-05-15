<?php
namespace App\classes;

class HelloWorld
{
    public $message, $msg;
    public function __construct()
    {
        $this->message = "Anything";
        $this->msg = "<br/><h1>Post One</h1>";
    }

    public function index()
    {
        echo $this->message;
        echo $this->msg;
    }
}