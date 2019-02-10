<?php

namespace Bezrukov\Node;

class PairTag extends Node
{

    protected $body;

    public function __construct($name, $attr, $body)
    {
        parent::__construct($name, $attr);

        $this->body = $body;
    }

    public function toString()
    {
        return '<'.$this->name.$this->printAttr($this->attrs).'>'.$this->body.'</'.$this->name.'>';
    }

}