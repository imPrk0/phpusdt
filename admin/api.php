<?php
/**
 * 后台管理 API (用于 Ajax 请求)
 * @author Prk<code@imprk.me>
 */

include_once __DIR__ . '/../common/common.php';

$action = $_GET['action'];
if (empty($action)) fail('未知的参数');

switch ($action) {
    case 'auth.login':
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) fail('用户名或密码不能为空');

        // TODO 临时不读写数据库
        if ($username !== 'admin' || $password !== 'admin') fail('账号或密码不正确。');
        success(true);
        break;
}

fail('未知的参数');
