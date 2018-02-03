<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

final class ClientErrorCode
{
    public const BadRequest                  = 400;
    public const Unauthorized                = 401;
    public const PaymentRequired             = 402;
    public const Forbidden                   = 403;
    public const NotFound                    = 404;
    public const MethodNotAllowed            = 405;
    public const NotAcceptable               = 406;
    public const ProxyAuthenticationRequired = 407; // RFC 7235
    public const RequestTimeout              = 408;
    public const Conflict                    = 409;
    public const Gone                        = 410;
    public const LengthRequired              = 411;
    public const PreconditionFailed          = 412; // RFC 7232
    public const PayloadTooLarge             = 413; // RFC 7231
    public const UriTooLong                  = 414; // RFC 7231
    public const UnsupportedMediaType        = 415;
    public const RangeNotSatisfiable         = 416; // RFC 7233
    public const ExpectationFailed           = 417;
    public const ImATeapot                   = 418; // RFC 2324
    public const MisdirectedRequest          = 421; // RFC 7540
    public const UnprocessableEntity         = 422; // RFC 4918
    public const FailedDependency            = 424; // RFC 4918
    public const UpgradeRequired             = 426;
    public const PreconditionRequired        = 428; // RFC 6585
    public const TooManyRequests             = 429; // RFC 6585
    public const RequestHeaderFieldsTooLarge = 431; // RFC 6585
    public const UnavailableForLegalReasons  = 451; // RFC 7725

    private function __construct()
    {
    }
}
