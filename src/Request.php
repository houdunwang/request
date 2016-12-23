<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace houdunwang\request;

//请求处理
use houdunwang\request\build\Base;

class Request {
	public function __construct() {
	}

	protected static function link() {
		static $link = null;
		if ( is_null( $link ) ) {
			$link = new Base();
		}

		return $link;
	}

	public function __call( $method, $params ) {
		return call_user_func_array( [ self::link(), $method ], $params );
	}

	public static function __callStatic( $name, $arguments ) {
		return call_user_func_array( [ static::link(), $name ], $arguments );
	}
}