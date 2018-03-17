<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

use Codeception\Test\Unit;

/**
 * Class Chapter02Test
 */
class Chapter02Test extends Unit {

    public function testEx1() {
        $this->assertEquals(true, ex2_1());
    }

}