<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin;

class Douyin
{
    const LABEL = 'douyin';
    const VERSION = '0.0.1';

    public function version(): string
    {
        return self::VERSION;
    }
}