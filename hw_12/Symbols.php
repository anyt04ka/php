<?php
require_once 'lib/Commandor.php';

class Symbols implements Commandor {

    public function getName()
    {
        return 'sym';
    }

    public function execute()
    {
        $number = mt_rand(1, 15);
        $result = '';
        for ($i = 0; $i <= $number; $i++) {
            $result = $result . chr(mt_rand(65, 90));
        }
        echo $result;
    }

    public function help()
    {
        return 'Выводит случайную последовательность символов';
    }
}