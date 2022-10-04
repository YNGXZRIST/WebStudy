<?php


include_once $_SERVER['DOCUMENT_ROOT'].'/classes/'.'Advertise.php';


$email= $_REQUEST['email'];
$title=$_REQUEST['title'];
$description=$_REQUEST['description'];
$category=$_REQUEST['category'];

$advert=new Advertise($email,$title,$description,$category);
$res=$advert->addAdvertise($advert);
print $res;