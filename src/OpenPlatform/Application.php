<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin\OpenPlatform;

use CodeSinging\LaravelDouyin\OpenPlatform\Auth\ClientToken;

class Application
{
    protected ?ClientToken $clientToken = null;

    /**
     * @return ClientToken|null
     */
    public function clientToken(): ?ClientToken
    {
        if ($this->clientToken === null) {
            $this->clientToken = new ClientToken();
        }

        return $this->clientToken;
    }
}