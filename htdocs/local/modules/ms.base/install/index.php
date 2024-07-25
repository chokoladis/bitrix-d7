<?
use Bitrix\Main\Config\Option;
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

class ms_base extends CModule
{
    var $MODULE_ID = "ms.base";
    var $MODULE_NAME;
    var $MODULE_VERSION;

    function __construct()
    {
        /** @var array $arModuleVersion */

        include_once (__DIR__ . '/vestion.php');


        $this->MODULE_VERSION = $arModuleVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];

        $this->MODULE_NAME = 'Кастомный модуль для разработчиков';
    }

    function DoInstall()
    {
        if (!$GLOBALS['USER']->IsAdmin()) {
            return;
        }

        global $DB, $APPLICATION, $step;

        RegisterModule($this->MODULE_ID);
        RegisterModuleDependences('main', 'OnPageStart', $this->MODULE_ID);

        $APPLICATION->IncludeAdminFile('Установка модуля ' . $this->MODULE_ID, __DIR__ . '/step.php');
    }

    function DoUninstall()
    {
        global $DB, $APPLICATION, $step;

        UnRegisterModuleDependences('main', 'OnPageStart', $this->MODULE_ID);
        UnRegisterModule($this->MODULE_ID);

        // $this->deleteOptions();

        $APPLICATION->IncludeAdminFile( 'Удаление модуля ' . $this->MODULE_ID, __DIR__ . " /unstep.php");
    }

    // public function deleteOptions()
    // {
    //     Option::delete($this->MODULE_ID);
    // }
}
