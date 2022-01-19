<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin;

use CodeSinging\LaravelDouyin\OpenPlatform\Application as OpenPlatformApplication;

class Douyin
{
    const LABEL = 'douyin';
    const VERSION = '0.0.1';

    protected ?OpenPlatformApplication $openPlatform = null;

    public function version(): string
    {
        return self::VERSION;
    }

    /**
     * @return OpenPlatformApplication|null
     */
    public function openPlatform(): ?OpenPlatformApplication
    {
        if (!$this->openPlatform){
            $this->openPlatform = new OpenPlatformApplication();
        }

        return $this->openPlatform;
    }
}