<?php

namespace Ryodevz\HttpfulWrapper;

use Httpful\Request;

class Http
{
    public static function get($uri, $mime = null)
    {
        return Request::get($uri, $mime);
    }

    public static function post($uri, $payload = null, $mime = null)
    {
        return Request::post($uri, $payload, $mime);
    }

    public static function put($uri, $payload = null, $mime = null)
    {
        return Request::put($uri, $payload, $mime);
    }
}
