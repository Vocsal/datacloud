<?php
/**
 * 存储数据库的常见操作函数
 */

//连接数据库
function db_connect() {
    static $link = null;        //保存数据库连接，静态变量便于下次直接访问
    if(!$link) {
        if(!$link = call_user_func_array('mysqli_connect', C('DB_CONNECT'))) { //获取数据库连接
            E('数据库连接失败。', mysqli_connect_error());
        }
        mysqli_set_charset($link, C('DB_CHARSET'));
    }
    return $link;
}

?>