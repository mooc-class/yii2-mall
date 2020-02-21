<?php

return [
	'title' => '编程浪子微信图书商城',
	'domain' => [
		'www' => 'http://book_my.imooc.test',
		'm' => 'http://book_my.imooc.test/m',
		'web' => 'http://book_my.imooc.test/web'
	],
	'upload' => [
		'avatar' => '/uploads/avatar',
		'brand' => '/uploads/brand',
		'book' => '/uploads/book',
	],
	'weixin' => [
		'appid' => '根据实际情况填写',
		'sk' => '根据实际情况填写',
		'token' => '根据实际情况填写',
		'aeskey' => '根据实际情况填写',
		'pay' => [
			'key' => '根据实际情况填写',
			'mch_id' => '根据实际情况填写',
			'notify_url' => [
				'm' => '/pay/callback'
			]
		]
	]
];
