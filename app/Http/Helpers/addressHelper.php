<?php

function renameCity($citytxt){

	if($citytxt == "DHA"){
		$city = "Dhaka";
	}elseif($citytxt == "BAR"){
		$city = "Barisal";
	}elseif($citytxt == "CHI"){
		$city = "Chittagong";
	}elseif($citytxt == "MYM"){
		$city = "Mymensingh";
	}elseif($citytxt == "RAJ"){
		$city = "Rajshahi";
	}elseif($citytxt == "KHU"){
		$city = "Khulna";
	}elseif($citytxt == "SYL"){
		$city = "Sylhet";
	}
	return $city;
}