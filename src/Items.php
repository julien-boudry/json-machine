<?php

declare(strict_types=1);

namespace JsonMachine;

/**
 * Entry-point facade for JSON Machine.
 */
final class Items implements \IteratorAggregate, PositionAware
{
    use FacadeTrait;

    protected function recursive(): bool
    {
        return false;
    }
}
