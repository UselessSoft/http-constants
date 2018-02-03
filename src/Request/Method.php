<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Request;

final class Method
{
    public const CONNECT = 'CONNECT';
    public const DELETE  = 'DELETE';
    public const GET     = 'GET';
    public const HEAD    = 'HEAD';
    public const OPTIONS = 'OPTIONS';
    public const PATCH   = 'PATCH';
    public const POST    = 'POST';
    public const PURGE   = 'PURGE';
    public const PUT     = 'PUT';
    public const TRACE   = 'TRACE';

    private function __construct()
    {
    }
}
