<?php

namespace App\classes;

class variables
{
    public $message, $x, $name, $age, $has_kids, $cash_on_hand;

    public function __construct()
    {
        $this->message = "Variables";
        $this->x='5'+'5';
        $this->name = 'Shohidullah';//string
        $this->age = 30;//int
        $this->cash_on_hand = 20.75;
        define('HOST', 'localhost');
        Define('DB_Name', 'Dev_DB');
    }

    public function index()
    {
        echo $this->message.'<br/>';
        echo $this->x.'<br/>';
        echo $this->name.'<br/>';
        echo $this->age;
        echo '<br/>'.$this->cash_on_hand;

        echo '<br/>';
        var_dump($this->name);

        echo '<br/>'.$this->cash_on_hand.'<br/>';
        echo var_dump($this->age);
        echo HOST;
        echo DB_Name;
    }
}

?>