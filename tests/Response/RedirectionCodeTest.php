<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

final class RedirectionCodeTest extends TestCase
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
                RedirectionCode::MultipleChoices,
                Response::HTTP_MULTIPLE_CHOICES,
            ],
            [
                RedirectionCode::MovedPermanently,
                Response::HTTP_MOVED_PERMANENTLY,
            ],
            [
                RedirectionCode::Found,
                Response::HTTP_FOUND,
            ],
            [
                RedirectionCode::SeeOther,
                Response::HTTP_SEE_OTHER,
            ],
            [
                RedirectionCode::MultipleChoices,
                Response::HTTP_MULTIPLE_CHOICES,
            ],
            [
                RedirectionCode::NotModified,
                Response::HTTP_NOT_MODIFIED,
            ],
            [
                RedirectionCode::UseProxy,
                Response::HTTP_USE_PROXY,
            ],
            [
                RedirectionCode::SwitchProxy,
                306,
            ],
            [
                RedirectionCode::TemporaryRedirect,
                Response::HTTP_TEMPORARY_REDIRECT,
            ],
            [
                RedirectionCode::PermanentRedirect,
                Response::HTTP_PERMANENTLY_REDIRECT,
            ],
        ];
    }
}
