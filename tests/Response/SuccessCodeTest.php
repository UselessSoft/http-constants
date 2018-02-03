<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

final class SuccessCodeTest extends TestCase
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
                SuccessCode::OK,
                Response::HTTP_OK,
            ],
            [
                SuccessCode::Created,
                Response::HTTP_CREATED,
            ],
            [
                SuccessCode::Accepted,
                Response::HTTP_ACCEPTED,
            ],
            [
                SuccessCode::NonAuthoritativeInformation,
                Response::HTTP_NON_AUTHORITATIVE_INFORMATION,
            ],
            [
                SuccessCode::NoContent,
                Response::HTTP_NO_CONTENT,
            ],
            [
                SuccessCode::ResetContent,
                Response::HTTP_RESET_CONTENT,
            ],
            [
                SuccessCode::PartialContent,
                Response::HTTP_PARTIAL_CONTENT,
            ],
            [
                SuccessCode::MultiStatus,
                Response::HTTP_MULTI_STATUS,
            ],
            [
                SuccessCode::AlreadyReported,
                Response::HTTP_ALREADY_REPORTED,
            ],
            [
                SuccessCode::ImUsed,
                Response::HTTP_IM_USED,
            ],
        ];
    }
}
