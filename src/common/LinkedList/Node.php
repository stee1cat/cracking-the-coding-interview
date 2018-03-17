<?php
/**
 * Copyright (c) 2018 Gennadiy Khatuntsev <e.steelcat@gmail.com>
 */

namespace stee1cat\LinkedList;

/**
 * Class Node
 * @package stee1cat\LinkedList
 */
class Node {

    /**
     * @var Node|null
     */
    protected $next;

    /**
     * @var mixed
     */
    protected $data;

    /**
     * Node constructor.
     *
     * @param $data
     */
    public function __construct($data) {
        $this->data = $data;
    }

    /**
     * @return null|Node
     */
    public function getNext(): ?Node {
        return $this->next;
    }

    /**
     * @param null|Node $next
     *
     * @return Node
     */
    public function setNext(?Node $next): Node {
        $this->next = $next;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param mixed $data
     *
     * @return Node
     */
    public function setData($data) {
        $this->data = $data;

        return $this;
    }

}