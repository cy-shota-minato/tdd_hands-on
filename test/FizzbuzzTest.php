<?php
namespace App;
class FizzbuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function resultNum(){
        $fizzbuss = new Fizzbuzz();
        $exception = 1;
        $this->assertSame($exception, $fizzbuss->calc(1));
    }

    /**
     * @test
     */
    public function result3ToFizz(){
        $fizzbuss = new Fizzbuzz();
        $exception = "Fizz";
        $this->assertSame($exception, $fizzbuss->calc(3));
        $this->assertSame($exception, $fizzbuss->calc(6));
    }
}
