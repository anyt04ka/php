<?php
require_once 'lib/Command.php';

class Numbers implements Commandor {

    public function getName()
    {
        return 'num';
    }

    public function execute()
    {
        echo mt_rand(0, 1000);
    }

    public function help()
    {
        return 'Выводит случайное целое число';
    }
}