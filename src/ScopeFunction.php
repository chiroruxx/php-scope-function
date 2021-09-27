<?php

declare(strict_types=1);

namespace Chiroruxx\ScopeFunction;

use Closure;

/**
 * Scope function.
 */
trait ScopeFunction
{
    /**
     * Calls the specified closure as its argument and returns its result.
     *
     * @param Closure $closure
     * @return mixed
     */
    public function let(Closure $closure)
    {
        return $closure($this);
    }

    /**
     * Calls the specified closure as its argument and returns this value.
     *
     * @param Closure $closure
     * @return $this
     */
    public function also(Closure $closure)
    {
        $closure($this);

        return $this;
    }
}
