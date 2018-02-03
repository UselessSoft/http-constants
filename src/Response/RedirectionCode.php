<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

final class RedirectionCode
{
    public const MultipleChoices   = 300;
    public const MovedPermanently  = 301;
    public const Found             = 302;
    public const SeeOther          = 303;
    public const NotModified       = 304; // RFC 7232
    public const UseProxy          = 305;
    public const SwitchProxy       = 306;
    public const TemporaryRedirect = 307;
    public const PermanentRedirect = 308; // RFC 7538

    private function __construct()
    {
    }
}
