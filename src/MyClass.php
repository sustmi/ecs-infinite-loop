<?php
declare(strict_types=1);

namespace Sustmi\EcsInfiniteLoop;

class MyClass
{
    public function foo()
    {
        throw new LogicException('This is some error message' .
            ' that is divided into multiple lines.',);
    }
}
