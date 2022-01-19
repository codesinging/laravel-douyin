<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace Tests;

use CodeSinging\LaravelDouyin\Douyin;
use Tests\TestCase;

class DouyinTest extends TestCase
{
    public function testVersion()
    {
        self::assertEquals(Douyin::VERSION, app('douyin')->version());
    }
}
