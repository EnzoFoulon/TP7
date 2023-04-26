<?php
use PHPUnit\Framework\TestCase;
use UPJV\INSSET\Validator;
require_once "./vendor/autoload.php";
require_once __DIR__."/../src/Validator.php";

class ValidatorTest extends TestCase
{
    public function testCheckReturnsTrueForStringWithAtLeast2Characters()
    {
        $validator = new Validator();
        $result = $validator->check('hello');
        $this->assertTrue($result);
    }

    public function testCheckReturnsFalseForStringWithLessThan2Characters()
    {
        $validator = new Validator();
        $result = $validator->check('a');
        $this->assertFalse($result);
    }
}

