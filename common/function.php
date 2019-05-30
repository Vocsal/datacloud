<?php
/**
 * 函数库，存储常见操作函数
 */

//遇到致命错误，输出错误信息并停止运行
function E($msg, $debug='') {
    $msg .= APP_DEBUG ? $debug : '';
    exit('<pre>'.htmlspecialchars($msg).'</pre>');
}

//访问配置文件
function C($name) {
    static $config = null;      //保存项目中的设置，静态变量便于下次访问
    if(!$config) {              //函数首次被调用时载入配置文件
        $config = require COMMON_PATH.'config.php';
    }
    return isset($config[$name]) ? $config[$name] : '';
}

?>