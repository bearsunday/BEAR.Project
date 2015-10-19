<?php
namespace BEAR\Project;

use BEAR\AppMeta\AppMeta;
use BEAR\Middleware\Boot;
use BEAR\Resource\ResourceInterface;
use Doctrine\Common\Annotations\AnnotationRegistry;

error_reporting(E_ALL);

$loader = require dirname(__DIR__) . '/vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);

// set the application path into the globals so we can access it in the tests.
$_ENV['TEST_DIR'] = __DIR__;
$_ENV['TMP_DIR'] = __DIR__ . '/tmp';

// set the resource client
$injector = (new Boot)->getInjector(new AppMeta(__NAMESPACE__), 'app');
$GLOBALS['RESOURCE'] = $injector->getInstance(ResourceInterface::class);
