<? if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
?>

<? $APPLICATION->IncludeComponent(
    'product.detail',
    '',
    [
        
        'CHECK_PERMISSIONS'  => $arParams['CHECK_PERMISSIONS'],
        // Путь к странице списка записей
        'LIST_URL'           => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['list'],
        // Значение ключа записи
        'ROW_ID'             => $arResult['VARIABLES']['ID'],
        // Ключ записи (наименование поля)
        'ROW_KEY'            => $arParams['ROW_KEY'],
        'COMPONENT_TEMPLATE' => $arParams['COMPONENT_TEMPLATE'],
        'SEF_FOLDER'         => $arParams['SEF_FOLDER'],
        'VARIABLES'          => $arResult['VARIABLES'],
    ],
    false
); ?>
