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
	protected $link;

	protected function driver() {
		$this->link = new Base();
		$this->link->bootstrap();

		return $this;
	}

	public function __call( $method, $params ) {
		if ( is_null( $this->link ) ) {
			$this->driver();
		}

		return call_user_func_array( [ $this->link, $method ], $params );
	}

	public static function __callStatic( $name, $arguments ) {
		static $link;
		if ( is_null( $link ) ) {
			$link = new static();
		}

		return call_user_func_array( [ $link, $name ], $arguments );
	}
}