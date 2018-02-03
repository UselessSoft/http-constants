<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Request;

final class Header
{
    public const Accept                      = 'Accept';
    public const AcceptCharset               = 'Accept-Charset';
    public const AcceptDatetime              = 'Accept-Datetime';
    public const AcceptEncoding              = 'Accept-Encoding';
    public const AcceptLanguage              = 'Accept-Language';
    public const AccessControlRequestHeaders = 'Access-Control-Request-Headers';
    public const AccessControlRequestMethod  = 'Access-Control-Request-Method';
    public const Authorization               = 'Authorization';
    public const CacheControl                = 'Cache-Control';
    public const Connection                  = 'Connection';
    public const ContentLength               = 'Content-Length';
    public const ContentMD5                  = 'Content-MD5';
    public const ContentType                 = 'Content-Type';
    public const Cookie                      = 'Cookie';
    public const Date                        = 'Date';
    public const Expect                      = 'Expect';
    public const Forwarded                   = 'Forwarded';
    public const From                        = 'From';
    public const Host                        = 'Host';
    public const IfMatch                     = 'If-Match';
    public const IfModifiedSince             = 'If-Modified-Since';
    public const IfNoneMatch                 = 'If-None-Match';
    public const IfRange                     = 'If-Range';
    public const IfUnmodifiedSince           = 'If-Unmodified-Since';
    public const MaxForwards                 = 'Max-Forwards';
    public const Origin                      = 'Origin';
    public const Pragma                      = 'Pragma';
    public const ProxyAuthorization          = 'Proxy-Authorization';
    public const Range                       = 'Range';
    public const Referer                     = 'Referer';
    public const TE                          = 'TE';
    public const Upgrade                     = 'Upgrade';
    public const UserAgent                   = 'User-Agent';
    public const Via                         = 'Via';
    public const Warning                     = 'Warning';

    private function __construct()
    {
    }
}
