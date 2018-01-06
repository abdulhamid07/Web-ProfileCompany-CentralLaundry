<?php

	if(empty($_GET['module'])){
		include "news/news.php";
	}else{
		switch($_GET['module']){
			case ('index'):case ('komentar'): include("news/news.php");
			break;
			case ('detail'): include ('news/detail_news.php');
			break;
			case ('contact'): case ('contact-hasil'): include ('contact/contact.php');
			break;
			case ('testimoni'): include ('testimoni/testimoni.php');
			break;
			case ('about'):include ('about/about.php');
			break;
			case ('value-added'):include ('services/value_added.php');
			break;
			case ('blog'):case ('searching'):include ('blog/blog.php');
			break;
			case ('searchpage'):include ('blog/blog.php');
			break;
			case ('our-laundry-service'):include ('services/our-laundry-service.php');
			break;
		}

	}
?>