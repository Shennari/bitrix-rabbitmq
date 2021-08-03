<?php

use Bitrix\Main\Loader;

require '../../../bitrix/modules/main/cli/bootstrap.php';

if (
    !Loader::includeModule('yngc0der.rabbitmq')
    && $ob = CModule::CreateModuleObject('yngc0der.rabbitmq')
) {
    $ob->DoInstall();
}