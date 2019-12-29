<?php
namespace Acme\Test;

class SimpleTest extends \PHPUnit_Framework_TestCase
{
    public function testIsTrue(){
        $myvar = true;
        $this->assertTrue($myvar);
    }
}