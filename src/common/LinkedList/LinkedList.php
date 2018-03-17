<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

namespace stee1cat\LinkedList;

/**
 * Class LinkedList
 * @package stee1cat\LinkedList
 */
class LinkedList {

    /**
     * @var Node
     */
    protected $firstNode;

    public function append(Node $end) {
        $node = $this->firstNode;

        while ($node->getNext() !== null)  {
            $node = $node->getNext();
        }

        $node->setNext($end);
    }

}