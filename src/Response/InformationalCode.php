<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

final class InformationalCode
{
    public const Continue           = 100;
    public const SwitchingProtocols = 101;
    public const Processing         = 102; // RFC 2518
    public const EarlyHints         = 103; // RFC 8297

    private function __construct()
    {
    }
}
