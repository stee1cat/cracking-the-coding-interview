<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

use Codeception\Test\Unit;

/**
 * Class Chapter01Test
 */
class Chapter01Test extends Unit {

    public function testEx1() {
        $this->assertEquals(false, ex1_1('hello'));
        $this->assertEquals(true, ex1_1('world'));
    }

    public function testEx2() {
        $this->assertEquals(true, ex1_2('bar', 'arb'));
        $this->assertEquals(false, ex1_2('bar', 'bor'));
        $this->assertEquals(true, ex1_2('bar', 'bar'));
        $this->assertEquals(false, ex1_2('bar', 'baar'));
        $this->assertEquals(false, ex1_2('baar', 'bar'));
    }

    public function testEx3() {
        $this->assertEquals('Mr.%20John%20Smith', ex1_3('Mr. John Smith'));
    }

    public function testEx4() {
        $this->assertEquals(true, ex1_4('Tact Coa'));
        $this->assertEquals(true, ex1_4('Toact Ca'));
        $this->assertEquals(false, ex1_4('Toect Ca'));
        $this->assertEquals(true, ex1_4('Tact  Coa'));
        $this->assertEquals(true, ex1_4('dom mdo'));
    }

    public function testEx5() {
        $this->assertEquals(true, ex1_5('pale', 'ple'));
        $this->assertEquals(true, ex1_5('pales', 'pale'));
        $this->assertEquals(true, ex1_5('pale', 'bale'));
        $this->assertEquals(false, ex1_5('pale', 'bake'));
    }

    public function testEx6() {
        $this->assertEquals('a2b1c5a3', ex1_6('aabcccccaaa'));
        $this->assertEquals('a', ex1_6('a'));
        $this->assertEquals('aa', ex1_6('aa'));
        $this->assertEquals('a3', ex1_6('aaa'));
        $this->assertEquals('abc', ex1_6('abc'));
    }

    public function testEx7() {
        $input = [
            [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]],
            [[13, 14, 15, 16], [17, 18, 19, 20], [21, 22, 23, 24]],
            [[25, 26, 27, 28], [29, 30, 31, 32], [33, 34, 35, 36]],
        ];

        $output = [
            [[25, 26, 27, 28], [13, 14, 15, 16], [1, 2, 3, 4]],
            [[29, 30, 31, 32], [17, 18, 19, 20], [5, 6, 7, 8]],
            [[33, 34, 35, 36], [21, 22, 23, 24], [9, 10, 11, 12]],
        ];

        $this->assertEquals($output, ex1_7($input));
    }

}