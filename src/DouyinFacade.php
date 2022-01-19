<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin;

/**
 * @method static string version()
 */
class DouyinFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Douyin::LABEL;
    }
}