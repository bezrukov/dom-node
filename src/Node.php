<?php

namespace Bezrukov\Node;

abstract class Node
{
    protected $name;

    protected $attrs;

    public function __construct($name, $attrs=[])
    {
        $this->name = $name;
        $this->attrs = $attrs;
    }

    protected function printAttr($attrs)
    {
        $preparedAttrs = array_map(function ($attr, $value) {
            return $attr.'='.$value;
        }, array_keys($attrs), $attrs);

        return ' '.implode(' ', $preparedAttrs).' ';
    }
}