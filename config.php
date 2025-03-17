<?php
/**
 * 程序配置文件
 * @author Prk<code@imprk.me>
 */

return [
    // 数据库配置
    'database' => [
        // 数据库类型，目前仅支持 mysql
        'type' => 'mysql',

        // 数据库连接信息
        'host' => '127.0.0.1',
        'port' => 3306,

        // 数据库名
        'name' => 'phpusdt',

        // 数据库用户的用户名和密码
        'username' => 'root',
        'password' => '123456',

        // 数据库前缀 (不需要 _)
        'prefix' => 'prk'
    ]
];
