<?php


use model\Advertise;
use service\AdService;

include_once $_SERVER['DOCUMENT_ROOT'] . '/model/' . 'Advertise.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/function/service/' . 'AdService.php';


$email = $_REQUEST['email'];
$title = $_REQUEST['title'];
$description = $_REQUEST['description'];
$category = $_REQUEST['category'];
$advert = new Advertise($email, $title, $description, $category);
$adService = new AdService();
$res = $adService->addAdvertise($advert);
print $res;
