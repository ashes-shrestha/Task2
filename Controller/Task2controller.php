<?php

include './Model/Task2Model.php';
class Task2controller
{
    public static function index(){

        header("Location: ./view/view.php?task2=".Task2Model::$test);

    }
}
