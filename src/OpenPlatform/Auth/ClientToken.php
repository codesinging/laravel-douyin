<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin\OpenPlatform\Auth;

use CodeSinging\LaravelDouyin\Exceptions\Exception;
use CodeSinging\LaravelDouyin\OpenPlatform\BaseService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ClientToken extends BaseService
{
    protected string $grantType = 'client_credential';
    protected string $api = 'https://open.douyin.com/oauth/client_token/';

    /**
     * @throws Exception
     */
    public function getData()
    {
        $response = Http::post($this->api, [
            'client_key' => $this->clientKey,
            'client_secret' => $this->clientSecret,
            'grant_type' => $this->grantType,
        ]);

        $data = $response->json('data');

        if ($data['error_code'] !== 0) {
            throw new Exception('Failed to get access_token');
        }

        return $data;
    }

    /**
     * @throws Exception
     */
    public function getNewToken()
    {
        $data = $this->getData();

        return $data['access_token'];
    }

    /**
     * @throws Exception
     */
    public function getToken()
    {
        $key = $this->cacheKey('client_token');

        if ($token = Cache::get($key)) {
            return $token;
        }

        $data = $this->getData();

        Cache::put($key, $token = $data['access_token'], $data['expires_in'] - 10);

        return $token;
    }
}