<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/4/28
 * Time: 上午11:52
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

return [
    // 数据库配置
    'database' => [
        'write' => [
            'database_type'     => 'mysql',
            'database_host'     => '192.168.0.102',
            'database_port'     => 3306,
            'database_user'     => 'root',
            'database_pwd'      => '123456',
            'database_charset'  => 'utf8',
            'database_name'     => 'test',
            'database_prefix'   => 'ws_'
        ],
        'read' => [
            'database_type'     => 'mysql',
            'database_host'     => '192.168.0.102',
            'database_port'     => 3306,
            'database_user'     => 'root',
            'database_pwd'      => '123456',
            'database_charset'  => 'utf8',
            'database_name'     => 'test',
            'database_prefix'   => ''
        ],
    ],
    // 存储配置
    'storage' => [
        'write' => [
            'type' => 'redis',
            'host' => '11.11.11.11',
            'port' => 6379
        ],
    ],
    // 资源管理
    'assets' => [
        /*'host' => 'http://baidu.com',
        'path' => 'public'*/
    ],
    // 错误页面配置
    'error' => [
        'page' => [
            404 => null
        ],
    ],
];