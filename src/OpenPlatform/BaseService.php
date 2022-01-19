<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin\OpenPlatform;

class BaseService
{
    protected string $clientKey = '';
    protected string $clientSecret = '';

    public function __construct()
    {
        $this->clientKey = config('douyin.site.client_key');
        $this->clientSecret = config('douyin.site.client_secret');
    }

    public function cacheKey(string $key): string
    {
        return sprintf('douyin.open.%s.%s', $this->clientKey, $key);
    }
}