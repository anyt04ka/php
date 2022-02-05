<?php

interface Commandor {

    public function getName();

    public function execute();

    public function help();
}