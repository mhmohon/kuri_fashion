<?php

function checkPermission($permissions){
	$userAcess = getMyRole(auth()->user()->user_role);
	foreach($permissions as $key => $value) {
		if($value == $userAcess){
			return true;
		}
	}
	return false;
}

function getMyRole($id){
	switch($id) {
		case 1:
		return 'superAdmin';
		break;

		case 2:
		return 'admin';
		break;

		case 3:
		return 'staff';
		break;

		default:
		return 'customer';
		break;

	}
}