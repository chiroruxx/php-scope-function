<?php

declare(strict_types=1);

namespace Chiroruxx\ScopeFunction\Test;

use Chiroruxx\ScopeFunction\ScopeFunction;
use PHPUnit\Framework\TestCase;

class ScopeFunctionTest extends TestCase
{
    public function testLet(): void
    {
        $instance = $this->createInstance();

        $this->assertSame(
            'test',
            $instance->let(function ($it): string {
                return $it->test();
            })
        );
    }

    public function testAlso(): void
    {
        $instance = $this->createInstance();
        $this->assertSame(
            $instance,
            $instance->also(function ($it): string {
                return $it->test();
            })
        );
    }

    private function createInstance()
    {
        return new class {
            use ScopeFunction;

            public function test(): string
            {
                return 'test';
            }
        };
    }
}
