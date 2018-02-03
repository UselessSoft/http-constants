<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

final class ServerErrorCode
{
    public const InternalServerError           = 500;
    public const NotImplemented                = 501;
    public const BadGateway                    = 502;
    public const ServiceUnavailable            = 503;
    public const GatewayTimeout                = 504;
    public const HttpVersionNotSupported       = 505;
    public const VariantAlsoNegotiates         = 506; // RFC 2295
    public const InsufficientStorage           = 507; // RFC 4918
    public const LoopDetected                  = 508; // RFC 5842
    public const NotExtended                   = 510; // RFC 2774
    public const NetworkAuthenticationRequired = 511; // RFC 6585

    private function __construct()
    {
    }
}
