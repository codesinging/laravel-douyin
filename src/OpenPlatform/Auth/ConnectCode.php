<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin\OpenPlatform\Auth;

use CodeSinging\LaravelDouyin\OpenPlatform\BaseService;

class ConnectCode extends BaseService
{
    protected string $responseType = 'code';

    protected array $scopes = [
        'video.create',
        'user_info',
        'trial.whitelist',
    ];

    protected array $optionalScopes = [];

    protected string $redirectUri = 'https://douyin.jscss.com/connect/code';

    protected string $state = '';

    protected string $api = 'https://open.douyin.com/platform/oauth/connect/';

    public function getQueries(): string
    {
        $queries = [
            'client_key' => $this->clientKey,
            'response_type' => $this->responseType,
            'scope' => implode(',', $this->scopes),
            'redirect_uri' => $this->redirectUri,
        ];
        if ($this->optionalScopes) {
            $queries['optionalScope'] = implode(',', $this->optionalScopes);
        }
        if ($this->state) {
            $queries['state'] = $this->state;
        }

        return http_build_query($queries);
    }

    /**
     * 该URL不是用来请求的, 需要展示给用户用于扫码，在抖音APP支持端内唤醒的版本内打开的话会弹出客户端原生授权页面。
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->api . '?' . $this->getQueries();
    }
}