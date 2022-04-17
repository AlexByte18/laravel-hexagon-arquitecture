<?php

declare (strict_types = 1);

namespace Core\Shared\Domain\ValueObject;

abstract class StringValueObject {

    protected string $value;

    public function __construct( string $value )
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }


}
