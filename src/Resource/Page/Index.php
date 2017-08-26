<?php

namespace BEAR\Project\Resource\Page;

use BEAR\Resource\ResourceObject;

class Index extends ResourceObject
{
    public function onGet(string $name = 'BEAR.Sunday') : ResourceObject
    {
        $fp = fopen(__DIR__ . '/image.jpg', 'r');
        stream_filter_append($fp, 'convert.base64-encode');
        $this->body = [
            'greting' => 'Hello ' . $name,
            'image' => $fp
        ];

        return $this;
    }
}
