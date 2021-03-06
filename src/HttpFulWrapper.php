<?php

namespace Ryodevz;

class HttpfulWrapper
{
    public static function get($uri, $mime = null)
    {
        return \Httpful\Request::get($uri, $mime);
    }

    public static function post($uri, $payload = null, $mime = null)
    {
        return \Httpful\Request::post($uri, $payload, $mime);
    }

    public static function put($uri, $payload = null, $mime = null)
    {
        return \Httpful\Request::put($uri, $payload, $mime);
    }
}
