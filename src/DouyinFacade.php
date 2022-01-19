<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin;

use CodeSinging\LaravelDouyin\OpenPlatform\Application as OpenPlatformApplication;

/**
 * @method static string version()
 * @method static OpenPlatformApplication openPlatform()
 */
class DouyinFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Douyin::LABEL;
    }
}