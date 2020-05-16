<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'posts' => [
		'controller' => 'main',
		'action' => 'post2',
	],
	'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'driver' => [
		'controller' => 'main',
		'action' => 'driver',
	],
	'post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],

	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],

	// AccountController

	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],
	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],
	'account/recovery' => [
		'controller' => 'account',
		'action' => 'recovery',
	],
	'account/profile' => [
		'controller' => 'account',
		'action' => 'profile',
	],
	'account/logout' => [
		'controller' => 'account',
		'action' => 'logout',
	],

];