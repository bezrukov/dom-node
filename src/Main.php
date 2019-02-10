<?php

namespace Bezrukov\Node;

class Main
{

    public function index()
    {
        $t1 = new PairTag('div', ['class' => 'row'], 'content');
        echo $t1->toString();
        $t2 = new SingleTag('hr');
        echo $t2->toString();
        echo PHP_EOL;

        var_dump($t1->isShort());
    }
}