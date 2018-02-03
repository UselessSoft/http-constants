<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Request;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

final class MethodTest extends TestCase
{
    /**
     * @dataProvider pairsProvider
     */
    public function test(string $actual, string $expected) : void
    {
        self::assertSame($expected, $actual);
    }

    /**
     * @return string[][]
     */
    public function pairsProvider() : array
    {
        return [
            [Method::CONNECT, Request::METHOD_CONNECT],
            [Method::DELETE, Request::METHOD_DELETE],
            [Method::GET, Request::METHOD_GET],
            [Method::HEAD, Request::METHOD_HEAD],
            [Method::OPTIONS, Request::METHOD_OPTIONS],
            [Method::PATCH, Request::METHOD_PATCH],
            [Method::POST, Request::METHOD_POST],
            [Method::PURGE, Request::METHOD_PURGE],
            [Method::PUT, Request::METHOD_PUT],
            [Method::TRACE, Request::METHOD_TRACE],
        ];
    }
}
