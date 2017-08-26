# BEAR.Sunday

BEAR.Sunday is a PSR-7 compliant Resource Oriented Framework. 

## Installing BEAR.Sunday PSR-7 application

```
composer create-project bear/project MyVendor.MyProject
cd MyVendor.MyProject
php -S 127.0.0.1:8080 -t public
```

## PHP Streams for message bodies

```php
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
```

```
// curl -i http://127.0.0.1:8080

HTTP/1.1 200 OK
Host: 127.0.0.1:8080
Connection: close
X-Powered-By: PHP/5.6.8
Content-Type: application/json

{"greeting":"Hello BEAR.Sunday","image":"/9j/4AAQZJ ... rpu/l56H//Z"}
```
## Documentation

You can read the documentation [here](http://bearsunday.github.io/).
