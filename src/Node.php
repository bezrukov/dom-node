<?php

namespace Bezrukov\Node;

abstract class Node
{
    protected $name;

    protected $attrs;

    const LENGTH = 10;

    public function __construct($name, $attrs=[])
    {
        $this->name = $name;
        $this->attrs = $attrs;
    }

    protected function getAttributesToString(): string
    {
        $preparedAttrs = array_map(function ($attr, $value) {
            return sprintf('%s=%s', $attr, $value);
        }, array_keys($this->attrs), $this->attrs);

        return implode(' ', $preparedAttrs);
    }

    public function isShort(): bool
    {
        return mb_strlen($this->getAttributesToString()) > self::LENGTH;
    }
}