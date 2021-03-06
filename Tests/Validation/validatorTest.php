<?php
namespace Acme\Tests;

use Acme\Http\Response;
use Acme\Http\Request;
use Acme\Validation\Validator;

class validatorTest extends \PHPUnit_Framework_TestCase
{
    public function testGetIsValidReturnsTrue()
    {
        $request = new Request([]);
        $response = new Response($request);
        $validator = new Validator($request, $response);

        $validator->setIsValid(true);
        $this->assertTrue($validator->getIsValid());
    }
}