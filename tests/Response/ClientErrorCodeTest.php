<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

final class ClientErrorCodeTest extends TestCase
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
                ClientErrorCode::BadRequest,
                Response::HTTP_BAD_REQUEST,
            ],
            [
                ClientErrorCode::Unauthorized,
                Response::HTTP_UNAUTHORIZED,
            ],
            [
                ClientErrorCode::PaymentRequired,
                Response::HTTP_PAYMENT_REQUIRED,
            ],
            [
                ClientErrorCode::Forbidden,
                Response::HTTP_FORBIDDEN,
            ],
            [
                ClientErrorCode::NotFound,
                Response::HTTP_NOT_FOUND,
            ],
            [
                ClientErrorCode::MethodNotAllowed,
                Response::HTTP_METHOD_NOT_ALLOWED,
            ],
            [
                ClientErrorCode::ProxyAuthenticationRequired,
                Response::HTTP_PROXY_AUTHENTICATION_REQUIRED,
            ],
            [
                ClientErrorCode::RequestTimeout,
                Response::HTTP_REQUEST_TIMEOUT,
            ],
            [
                ClientErrorCode::Conflict,
                Response::HTTP_CONFLICT,
            ],
            [
                ClientErrorCode::Gone,
                Response::HTTP_GONE,
            ],
            [
                ClientErrorCode::LengthRequired,
                Response::HTTP_LENGTH_REQUIRED,
            ],
            [
                ClientErrorCode::PreconditionFailed,
                Response::HTTP_PRECONDITION_FAILED,
            ],
            [
                ClientErrorCode::PayloadTooLarge,
                Response::HTTP_REQUEST_ENTITY_TOO_LARGE,
            ],
            [
                ClientErrorCode::UriTooLong,
                Response::HTTP_REQUEST_URI_TOO_LONG,
            ],
            [
                ClientErrorCode::UnsupportedMediaType,
                Response::HTTP_UNSUPPORTED_MEDIA_TYPE,
            ],
            [
                ClientErrorCode::RangeNotSatisfiable,
                Response::HTTP_REQUESTED_RANGE_NOT_SATISFIABLE,
            ],
            [
                ClientErrorCode::ExpectationFailed,
                Response::HTTP_EXPECTATION_FAILED,
            ],
            [
                ClientErrorCode::ImATeapot,
                Response::HTTP_I_AM_A_TEAPOT,
            ],
            [
                ClientErrorCode::MisdirectedRequest,
                Response::HTTP_MISDIRECTED_REQUEST,
            ],
            [
                ClientErrorCode::UnprocessableEntity,
                Response::HTTP_UNPROCESSABLE_ENTITY,
            ],
            [
                ClientErrorCode::FailedDependency,
                Response::HTTP_FAILED_DEPENDENCY,
            ],
            [
                ClientErrorCode::UpgradeRequired,
                Response::HTTP_UPGRADE_REQUIRED,
            ],
            [
                ClientErrorCode::PreconditionRequired,
                Response::HTTP_PRECONDITION_REQUIRED,
            ],
            [
                ClientErrorCode::TooManyRequests,
                Response::HTTP_TOO_MANY_REQUESTS,
            ],
            [
                ClientErrorCode::RequestHeaderFieldsTooLarge,
                Response::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE,
            ],
            [
                ClientErrorCode::UnavailableForLegalReasons,
                Response::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS,
            ],
        ];
    }
}
