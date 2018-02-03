<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

final class ServerErrorCodeTest extends TestCase
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
                ServerErrorCode::InternalServerError,
                Response::HTTP_INTERNAL_SERVER_ERROR,
            ],
            [
                ServerErrorCode::NotImplemented,
                Response::HTTP_NOT_IMPLEMENTED,
            ],
            [
                ServerErrorCode::BadGateway,
                Response::HTTP_BAD_GATEWAY,
            ],
            [
                ServerErrorCode::ServiceUnavailable,
                Response::HTTP_SERVICE_UNAVAILABLE,
            ],
            [
                ServerErrorCode::GatewayTimeout,
                Response::HTTP_GATEWAY_TIMEOUT,
            ],
            [
                ServerErrorCode::HttpVersionNotSupported,
                Response::HTTP_VERSION_NOT_SUPPORTED,
            ],
            [
                ServerErrorCode::VariantAlsoNegotiates,
                Response::HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL,
            ],
            [
                ServerErrorCode::InsufficientStorage,
                Response::HTTP_INSUFFICIENT_STORAGE,
            ],
            [
                ServerErrorCode::LoopDetected,
                Response::HTTP_LOOP_DETECTED,
            ],
            [
                ServerErrorCode::NotExtended,
                Response::HTTP_NOT_EXTENDED,
            ],
            [
                ServerErrorCode::NetworkAuthenticationRequired,
                Response::HTTP_NETWORK_AUTHENTICATION_REQUIRED,
            ],
        ];
    }
}
