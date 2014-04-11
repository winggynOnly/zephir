<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir Language                                                          |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2014 Zephir Team and contributors                     |
 +--------------------------------------------------------------------------+
 | This source file is subject the MIT license, that is bundled with        |
 | this package in the file LICENSE, and is available through the           |
 | world-wide-web at the following url:                                     |
 | http://zephir-lang.com/license.html                                      |
 |                                                                          |
 | If you did not receive a copy of the MIT license and are unable          |
 | to obtain it through the world-wide-web, please send a note to           |
 | license@zephir-lang.com so we can mail you a copy immediately.           |
 +--------------------------------------------------------------------------+
*/

namespace Extension;


class CastTest extends \PHPUnit_Framework_TestCase
{
    public function testCast()
    {
        $t = new \Test\Cast();

        $this->assertTrue($t->testIntCastFromFloat() === 5);
        $this->assertTrue($t->testIntCastFromBoolean() === 1);

        $this->assertTrue($t->testBooleanCastFromIntTrue1() === true);
        $this->assertTrue($t->testBooleanCastFromIntTrue2() === true);
        $this->assertTrue($t->testBooleanCastFromIntFalse() === false);
        $this->assertTrue($t->testBooleanCastFromObject() === true);
        $this->assertTrue($t->testBooleanCastFromEmptyArray() === false);
        $this->assertTrue($t->testBooleanCastFromArray() === true);
        $this->assertTrue($t->testBooleanCaseFromNull() === false);
    }
}
