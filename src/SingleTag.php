<?php

namespace Bezrukov\Node;

class SingleTag extends Node
{
    public function toString()
    {
        return '<'.$this->name.$this->printAttr($this->attrs).'>';
    }
}