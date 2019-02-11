<?php

namespace Bezrukov\Node;

class SingleTag extends Node
{
    public function toString()
    {
        return sprintf('<%s %s/>', $this->name, $this->getAttributesToString());
    }
}