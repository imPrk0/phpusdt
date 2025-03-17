<?php
/**
 * 程序核心文件
 * @author Prk<code@imprk.me>
 */

error_reporting(E_ERROR | E_PARSE | E_COMPILE_ERROR);

if (defined('IN_CRON_LITE')) return;
const IN_CRON_LITE = true;

define('SYSTEM_ROOT', dirname(__FILE__) . '/');
define('ROOT', dirname(SYSTEM_ROOT) . '/');

const VERSION = '1001';
const DB_VERSION = '1001';

date_default_timezone_set('Asia/Shanghai');

$date = date('Y-m-d H:i:s');

if (empty($noSession)) session_start();

// 自动载入
include_once __DIR__ . '/autoloader.php';
Autoloader::register();

// 获取配置文件
$config = include ROOT . 'config.php';
