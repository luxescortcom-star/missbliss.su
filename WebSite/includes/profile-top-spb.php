<?php


define('__ROOT__', dirname(dirname(dirname(dirname(__FILE__)))));



require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $folder='b2';
	$folder_full='f2';

} elseif( $detect->isTablet() ){
    $folder='b2';
	$folder_full='f2';
}
  else {
    $folder='b3';
	$folder_full='f3';
    $spbgirls='/section_generator.php';
}



$script='/min/g=js-profile';
$city='spb';
$css='/min/g=profile';
$flink='m-b.su/spb';
$flink2='m-b.su/sochi';
$blink='images/spb';
$blink2='m-b.su/sochi';
$slink='m-b.su/social/spb';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';





include_once 'links.php';


?>



