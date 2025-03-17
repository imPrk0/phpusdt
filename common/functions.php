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
