<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace Tests;

use CodeSinging\LaravelDouyin\Douyin;
use CodeSinging\LaravelDouyin\DouyinFacade;

class DouyinFacadeTest extends TestCase
{
    public function testVersion()
    {
        self::assertEquals(Douyin::VERSION, DouyinFacade::version());
    }
}
