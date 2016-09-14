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
     */
    public function dp_result3ToFizzAnd5ToBuzz(){
        return [
            [3,'Fizz'],
            [6,'Fizz'],
            [5,'Buzz'],
            [10,'Buzz'],
            [15,'FizzBuzz'],
            [30,'FizzBuzz'],
        ];
    }

    /**
     * @test
     * @dataProvider dp_result3ToFizzAnd5ToBuzz
     */
    public function result3ToFizzAnd5ToBuzz($num,$exception){
        $fizzbuss = new Fizzbuzz();
        $this->assertSame($exception, $fizzbuss->calc($num));
    }

//    /**
//     * @test
//     */
//    public function result3ToFizz(){
//        $fizzbuss = new Fizzbuzz();
//        $exception = "Fizz";
//        $this->assertSame($exception, $fizzbuss->calc(3));
//        $this->assertSame($exception, $fizzbuss->calc(6));
//    }
//
//    /**
//     * @test
//     */
//    public function result5ToBuzz(){
//        $fizzbuss = new Fizzbuzz();
//        $exception = "Buzz";
//        $this->assertSame($exception, $fizzbuss->calc(5));
//        $this->assertSame($exception, $fizzbuss->calc(10));
//    }
//
//    /**
//     * @test
//     */
//    public function result3and5ToBuzz(){
//        $fizzbuss = new Fizzbuzz();
//        $exception = "FizzBuzz";
//        $this->assertSame($exception, $fizzbuss->calc(15));
//        $this->assertSame($exception, $fizzbuss->calc(30));
//    }
}
