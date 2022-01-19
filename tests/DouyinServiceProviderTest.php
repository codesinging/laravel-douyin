<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace Tests;

use CodeSinging\LaravelDouyin\Douyin;
use CodeSinging\LaravelDouyin\DouyinServiceProvider;

class DouyinServiceProviderTest extends TestCase
{
    public function testProvider()
    {
        self::assertInstanceOf(Douyin::class, app('douyin'));
    }

    public function testSingleton()
    {
        self::assertSame(app('douyin'), app('douyin'));
        self::assertEquals(app('douyin'), app('douyin'));
    }
}
