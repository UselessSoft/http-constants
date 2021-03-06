<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

use PHPUnit\Framework\TestCase;

final class HeaderTest extends TestCase
{
    /**
     * @dataProvider headersProvider
     */
    public function test(string $actual, string $expected) : void
    {
        self::assertSame($expected, $actual);
    }

    /**
     * @return string[][]
     */
    public function headersProvider() : array
    {
        return [
            [
                Header::AcceptPatch,
                'Accept-Patch',
            ],
            [
                Header::AcceptRanges,
                'Accept-Ranges',
            ],
            [
                Header::AccessControlAllowOrigin,
                'Access-Control-Allow-Origin',
            ],
            [
                Header::AccessControlAllowCredentials,
                'Access-Control-Allow-Credentials',
            ],
            [
                Header::AccessControlExposeHeaders,
                'Access-Control-Expose-Headers',
            ],
            [
                Header::AccessControlMaxAge,
                'Access-Control-Max-Age',
            ],
            [
                Header::AccessControlAllowMethods,
                'Access-Control-Allow-Methods',
            ],
            [
                Header::AccessControlAllowHeaders,
                'Access-Control-Allow-Headers',
            ],
            [
                Header::Age,
                'Age',
            ],
            [
                Header::Allow,
                'Allow',
            ],
            [
                Header::AltSvc,
                'Alt-Svc',
            ],
            [
                Header::CacheControl,
                'Cache-Control',
            ],
            [
                Header::Connection,
                'Connection',
            ],
            [
                Header::ContentDisposition,
                'Content-Disposition',
            ],
            [
                Header::ContentEncoding,
                'Content-Encoding',
            ],
            [
                Header::ContentLanguage,
                'Content-Language',
            ],
            [
                Header::ContentLength,
                'Content-Length',
            ],
            [
                Header::ContentLocation,
                'Content-Location',
            ],
            [
                Header::ContentMD5,
                'Content-MD5',
            ],
            [
                Header::ContentRange,
                'Content-Range',
            ],
            [
                Header::ContentType,
                'Content-Type',
            ],
            [
                Header::Date,
                'Date',
            ],
            [
                Header::ETag,
                'ETag',
            ],
            [
                Header::Expires,
                'Expires',
            ],
            [
                Header::LastModified,
                'Last-Modified',
            ],
            [
                Header::Link,
                'Link',
            ],
            [
                Header::Location,
                'Location',
            ],
            [
                Header::P3P,
                'P3P',
            ],
            [
                Header::Pragma,
                'Pragma',
            ],
            [
                Header::ProxyAuthenticate,
                'Proxy-Authenticate',
            ],
            [
                Header::PublicKeyPins,
                'Public-Key-Pins',
            ],
            [
                Header::RetryAfter,
                'Retry-After',
            ],
            [
                Header::Server,
                'Server',
            ],
            [
                Header::SetCookie,
                'Set-Cookie',
            ],
            [
                Header::StrictTransportSecurity,
                'Strict-Transport-Security',
            ],
            [
                Header::Tk,
                'Tk',
            ],
            [
                Header::Trailer,
                'Trailer',
            ],
            [
                Header::TransferEncoding,
                'Transfer-Encoding',
            ],
            [
                Header::Upgrade,
                'Upgrade',
            ],
            [
                Header::Vary,
                'Vary',
            ],
            [
                Header::Via,
                'Via',
            ],
            [
                Header::Warning,
                'Warning',
            ],
            [
                Header::WwwAuthenticate,
                'WWW-Authenticate',
            ],
            [
                Header::XFrameOptions,
                'X-Frame-Options',
            ],
        ];
    }
}
