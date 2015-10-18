<?php

namespace BEAR\Project\Module;

use BEAR\Sunday\Module\SundayModule;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->install(new SundayModule);
    }
}
