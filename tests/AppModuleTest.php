<?php

namespace BEAR\Project;

use BEAR\AppMeta\AppMeta;
use BEAR\Middleware\Boot;
use BEAR\Package\Bootstrap;
use BEAR\Resource\ResourceInterface;

class AppModuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider
     */
    public function contextsProvider()
    {
        return [
            ['app']
        ];
    }

    /**
     * @dataProvider contextsProvider
     */
    public function testNewApp($contexts)
    {
        $injector = (new Boot())->getInjector(new AppMeta(__NAMESPACE__), $contexts);
        $resource = $injector->getInstance(ResourceInterface::class);
        $this->assertInstanceOf(ResourceInterface::class, $resource);
    }
}
