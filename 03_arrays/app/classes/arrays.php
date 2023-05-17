<?php

namespace App\classes;

class arrays
{
    public $message, $numbers, $fruits, $colors;

    public function __construct()
    {
        $this->message = 4;
        $this->numbers = [1, 44.6, 55, 22];
        $this->fruits = array('apple', 'orange', 'pear');

        //Associative Array
        $this->colors = [
            1 => 'red',
            2 => 'blue',
            3 => 'green'
        ];

        $this->person = [
            'fname' => 'ss',
            'sname' => 'tt'
        ];

    }

    public function index()
    {
        echo $this->message.'<br/>';
        var_dump($this->numbers).'<br/>';
        echo '<br/>'.$this->fruits[0].'<br/>';
        var_dump(json_encode($this->fruits));

        echo '<br/>'.'<br/>'.$this->colors[1].'<br/>';
        echo $this->colors[3].'<br/>';
        echo $this->person['fname'].'<br/>';
        echo $this->person['sname'];
        /*echo $len = isset($colors['4']) ? count($colors['4']) : 0;*/
    }
}