<?php declare(strict_types=1);

namespace Vsd\Common\Resources;

class VsdIterator implements \Iterator {

    private $position = 0;
    private $class;
    private $options; 

    public function __construct($class, $options) {
        $this->class = $class;
        $this->options = $options ?: [];
        $this->position = 0;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return (clone $this->class)->populateFromArray($this->options[$this->position]);
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        return isset($this->options[$this->position]);
    }
}
