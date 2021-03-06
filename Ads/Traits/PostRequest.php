<?php

namespace Ads\Traits;

trait PostRequest
{

    function post_request($url, $data, $optional_headers = null)
    {
        $params = [
            'http' =>
                [
                    'method' => 'POST',
                    'content' => http_build_query($data)
                ]
        ];
        if ($optional_headers !== null) {
            $params['http']['header'] = $optional_headers;
        }
        $ctx = stream_context_create($params);
        $fp = @fopen($url, 'rb', false, $ctx);
        if (!$fp) {
            throw new \Exception("Problem with $url, $php_errormsg");
        }
        $response = @stream_get_contents($fp);
        if ($response === false) {
            throw new \Exception("Problem reading data from $url, $php_errormsg");
        }
        return $response;
    }

}
