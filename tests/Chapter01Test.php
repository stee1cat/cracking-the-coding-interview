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
        $this->assertEquals(false, ex1('hello'));
        $this->assertEquals(true, ex1('world'));
    }

    public function testEx2() {
        $this->assertEquals(true, ex2('bar', 'arb'));
        $this->assertEquals(false, ex2('bar', 'bor'));
        $this->assertEquals(true, ex2('bar', 'bar'));
        $this->assertEquals(false, ex2('bar', 'baar'));
        $this->assertEquals(false, ex2('baar', 'bar'));
    }

    public function testEx3() {
        $this->assertEquals('Mr.%20John%20Smith', ex3('Mr. John Smith'));
    }

    public function testEx4() {
        $this->assertEquals(true, ex4('Tact Coa'));
        $this->assertEquals(true, ex4('Toact Ca'));
        $this->assertEquals(false, ex4('Toect Ca'));
        $this->assertEquals(true, ex4('Tact  Coa'));
        $this->assertEquals(true, ex4('dom mdo'));
    }

    public function testEx5() {
        $this->assertEquals(true, ex5('pale', 'ple'));
        $this->assertEquals(true, ex5('pales', 'pale'));
        $this->assertEquals(true, ex5('pale', 'bale'));
        $this->assertEquals(false, ex5('pale', 'bake'));
    }

    public function testEx6() {
        $this->assertEquals('a2b1c5a3', ex6('aabcccccaaa'));
        $this->assertEquals('a', ex6('a'));
        $this->assertEquals('aa', ex6('aa'));
        $this->assertEquals('a3', ex6('aaa'));
        $this->assertEquals('abc', ex6('abc'));
    }

}