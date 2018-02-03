<?php

declare(strict_types=1);

namespace UselessSoft\HttpConstants\Response;

final class Header
{
    public const AcceptPatch                   = 'Accept-Patch';
    public const AcceptRanges                  = 'Accept-Ranges';
    public const AccessControlAllowOrigin      = 'Access-Control-Allow-Origin';
    public const AccessControlAllowCredentials = 'Access-Control-Allow-Credentials';
    public const AccessControlExposeHeaders    = 'Access-Control-Expose-Headers';
    public const AccessControlMaxAge           = 'Access-Control-Max-Age';
    public const AccessControlAllowMethods     = 'Access-Control-Allow-Methods';
    public const AccessControlAllowHeaders     = 'Access-Control-Allow-Headers';
    public const Age                           = 'Age';
    public const Allow                         = 'Allow';
    public const AltSvc                        = 'Alt-Svc';
    public const CacheControl                  = 'Cache-Control';
    public const Connection                    = 'Connection';
    public const ContentDisposition            = 'Content-Disposition';
    public const ContentEncoding               = 'Content-Encoding';
    public const ContentLanguage               = 'Content-Language';
    public const ContentLength                 = 'Content-Length';
    public const ContentLocation               = 'Content-Location';
    public const ContentMD5                    = 'Content-MD5';
    public const ContentRange                  = 'Content-Range';
    public const ContentType                   = 'Content-Type';
    public const Date                          = 'Date';
    public const ETag                          = 'ETag';
    public const Expires                       = 'Expires';
    public const LastModified                  = 'Last-Modified';
    public const Link                          = 'Link';
    public const Location                      = 'Location';
    public const P3P                           = 'P3P';
    public const Pragma                        = 'Pragma';
    public const ProxyAuthenticate             = 'Proxy-Authenticate';
    public const PublicKeyPins                 = 'Public-Key-Pins';
    public const RetryAfter                    = 'Retry-After';
    public const Server                        = 'Server';
    public const SetCookie                     = 'Set-Cookie';
    public const StrictTransportSecurity       = 'Strict-Transport-Security';
    public const Tk                            = 'Tk';
    public const Trailer                       = 'Trailer';
    public const TransferEncoding              = 'Transfer-Encoding';
    public const Upgrade                       = 'Upgrade';
    public const Vary                          = 'Vary';
    public const Via                           = 'Via';
    public const Warning                       = 'Warning';
    public const WwwAuthenticate               = 'WWW-Authenticate';
    public const XFrameOptions                 = 'X-Frame-Options';

    private function __construct()
    {
    }
}
