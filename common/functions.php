<?php
/**
 * 公共函数库
 * @author Prk<code@imprk.me>
 */

/**
 * 添加转义字符 (防止 SQL 注入)
 * @author Prk<code@imprk.me>
 *
 * @param string | array $string 欲要转义的字符串或数组
 *
 * @return string | array 转义后的字符串或数组
 */
function daddslashes($string) {
    if (is_array($string)) {
        foreach($string as $key => $val) {
            $string[$key] = daddslashes($val);
        }
    } else $string = addslashes($string);

    return $string;
}

/**
 * 构建成功 JSON 响应
 * @author Prk<code@imprk.me>
 *
 * @param mixed $data 响应数据
 * @param integer $code 状态码 (可以不要)
 *
 * @return void 不会返回任何内容
 */
function success($data, int $code = 0): void {
    exit(
        '{"code":' . $code . ',"message":"","data":' . json_encode($data) . '}'
    );
}

/**
 * 构建失败 JSON 响应
 * @author Prk<code@imprk.me>
 *
 * @param string $message 失败原因
 * @param integer $code 状态码 (可以不要)
 * @param mixed $data 响应数据
 *
 * @return void 不会返回任何内容
 */
function fail(string $message = '未知错误', int $code = -1, $data = null): void {
    exit(
        '{"code":' . $code . ',"message":"' . json_encode($message) . '","data":' . json_encode($data) . '}'
    );
}
