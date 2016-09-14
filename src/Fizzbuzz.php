<?php
namespace App;
class Fizzbuzz
{
    public function calc($num){

        if(($num % 3) == 0){
            return 'Fizz';
        }
        return $num;
    }
}
