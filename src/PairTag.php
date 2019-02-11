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
        return sprintf(
            '<%s %s>%s</%s>',
            $this->name,
            $this->getAttributesToString(),
            $this->body,
            $this->name
        );
    }

}