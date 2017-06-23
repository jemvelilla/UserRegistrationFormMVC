<?php
$router->define([
	'' => 'PagesController@home',
	'logout' => 'PagesController@logout',
	'add' => 'PagesController@addview', //used to redirect to add page
	'update' => 'PagesController@updateview', //used to redirect to update page
	
	'view' => 'UsersController@view',
	'add-user' => 'UsersController@add', //used for add user function
	'select' => 'UsersController@select', //used to get the value to update
	'update-user' => 'UsersController@update', //used for update function
	'delete' => 'UsersController@delete',
	'login' => 'UsersController@login'
	
]);
