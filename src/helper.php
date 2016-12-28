<?php
/**
 * 请求参数
 *
 * @param $var 变量名
 * @param null $default 默认值
 * @param string $filter 数据处理函数
 *
 * @return mixed
 */
if ( ! function_exists( 'q' ) ) {
	function q( $var, $default = null, $filter = '' ) {
		return Request::query( $var, $default, $filter );
	}
}