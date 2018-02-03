<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

final class SuccessCode
{
    public const OK                          = 200;
    public const Created                     = 201;
    public const Accepted                    = 202;
    public const NonAuthoritativeInformation = 203;
    public const NoContent                   = 204;
    public const ResetContent                = 205;
    public const PartialContent              = 206; // RFC 7233
    public const MultiStatus                 = 207; // RFC 4918
    public const AlreadyReported             = 208; // RFC 5842
    public const ImUsed                      = 226; // RFC 3229

    private function __construct()
    {
    }
}
