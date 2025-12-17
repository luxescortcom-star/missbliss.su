<?php






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
    $spbgirls='../section_cache.php';
}



$script='/min/g=js-profile';
$css='/min/g=profile';
$flink='m-b.su/rnd';
$flink2='m-b.su/sochi';
$blink='images/rnd';
$blink2='m-b.su/sochi';
$slink='m-b.su/social/rnd';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';
$city='rnd';




include_once 'links.php';


?>



