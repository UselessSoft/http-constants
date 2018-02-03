<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

final class InformationalCodeTest extends TestCase
{
    /**
     * @dataProvider codesProvider
     */
    public function test(int $actual, int $expected) : void
    {
        self::assertSame($expected, $actual);
    }

    /**
     * @return int[][]
     */
    public function codesProvider() : array
    {
        return [
            [
                InformationalCode::Continue,
                Response::HTTP_CONTINUE,
            ],
            [
                InformationalCode::SwitchingProtocols,
                Response::HTTP_SWITCHING_PROTOCOLS,
            ],
            [
                InformationalCode::Processing,
                Response::HTTP_PROCESSING,
            ],
            [
                InformationalCode::EarlyHints,
                103,
            ],
        ];
    }
}
