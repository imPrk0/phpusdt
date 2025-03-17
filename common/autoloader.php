<?php
/**
 * 自动载入器
 * @author Prk<code@imprk.me>
 */

class Autoloader {
    /**
     * 注册自动载入
     * @author Prk<code@imprk.me>
     *
     * @return void 什么都不会返回
     */
    public static function register(): void {
        spl_autoload_register([
            new self,
            'autoload'
        ]);
    }

    /**
     * 根据类名自动载入
     * @author Prk<code@imprk.me>
     *
     * @param string $className 类名
     *
     * @return boolean 是否注册了
     */
    public static function autoload(string $className): bool {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . $className;
        $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath) . '.php';

        if (file_exists($filePath)) {
            require_once $filePath;
            return true;
        }

        return false;
    }
}
