<?php
ob_start("ob_gzhandler");

require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $folder='b2';
	$folder_full='f2';

} elseif( $detect->isTablet() ){
    $folder='b2';
	$folder_full='f2';

}else {
    $folder='b3';
	$folder_full='f3';
    $spbgirls='../section_cache.php';
}




$css='/min/g=profile';
$script='/min/g=js-profile-en';
$flink='m-b.su/spb';
$blink='images/spb';
$slink='m-b.su/social/spb';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city3='Saint-Petersburg, Russia';
$city='spb';

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/links.php';
?>
