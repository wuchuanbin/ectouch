<?php

/**
 * 加载函数库
 * @param array $files
 * @param string $module
 */
function load_helper($files = array(), $module = '')
{
    if (!is_array($files)) {
        $files = array(
            $files
        );
    }
    if (empty($module)) {
        $base_path = app_path('Helpers/');
    } else {
        $base_path = app_path('Modules/' . ucfirst($module) . '/Helpers/');
    }
    foreach ($files as $vo) {
        $helper = $base_path . $vo . '.php';
        if (file_exists($helper)) {
            require_once $helper;
        }
    }
}

/**
 * 加载语言包
 * @param array $files
 * @param string $module
 */
function load_lang($files = array(), $module = '')
{
    static $LANG = [];
    if (!is_array($files)) {
        $files = array(
            $files
        );
    }
    if (empty($module)) {
        $base_path = resource_path('lang/' . config('shop.lang') . '/');
    } else {
        $base_path = app_path('Modules/' . ucfirst($module) . '/Languages/' . config('shop.lang') . '/');
    }
    foreach ($files as $vo) {
        $helper = $base_path . $vo . '.php';
        if (file_exists($helper)) {
            $LANG = array_merge($LANG, require_once $helper);
        }
    }
    $GLOBALS['_LANG'] = $LANG;
}
