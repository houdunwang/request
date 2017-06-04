<?php
/**
 * 请求参数
 *
 * @param        $var     变量名
 * @param null   $default 默认值
 * @param string $filter  数据处理函数
 *
 * @return mixed
 */
if ( ! function_exists('q')) {
    /**
     * 取得或设置全局数据包括:
     * $_COOKIE,$_SESSION,$_GET,$_POST,$_REQUEST,$_SERVER,$_GLOBALS
     *
     * @param string $var     变量名
     * @param mixed  $default 默认值
     * @param string $methods 函数库
     *
     * @return mixed
     */
    function q($var, $default = null, $methods = '')
    {
        return \houdunwang\request\Request::query($var, $default, $methods);
    }
}

if ( ! function_exists('old')) {
    /**
     * 获取表单旧数据
     *
     * @param        $name    表单
     * @param string $default 默认值
     *
     * @return string
     */
    function old($name, $default = '')
    {
        $data = \houdunwang\session\Session::flash('oldFormData');

        return isset($data[$name]) ? $data[$name] : $default;
    }
}
if ( ! function_exists('clientIp')) {
    /**
     * 客户端IP地址
     *
     * @return mixed
     */
    function clientIp()
    {
        return \houdunwang\request\Request::ip();
    }
}