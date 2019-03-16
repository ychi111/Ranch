<?php

Class Cow {
    public $id; //уникальный id
    public $milk; //молока в надое
    function __construct() {
        $this->id = substr(md5(rand()), 0, 6); //получаем случаный id длинною в 6 символов
    }
    function giveMilk() {
        return rand(8,12); //выдает 8-12 литров молока
    }
}

Class Hen {
    public $id; //уникальный id
    public $egg; //яичек в кладке
    function __construct() {
        $this->id = substr(md5(rand()), 0, 6); //получаем случаный id длинною в 6 символов
    }
    function giveEgg() {
        return rand(0,1); //выдает 0-1 яичек
    }
}
