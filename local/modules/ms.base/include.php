<?
use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses('ms.base', [
    'Ms\\Main\\Controllers\\TestController' => 'lib/main/controllers/TestController.php'
]);