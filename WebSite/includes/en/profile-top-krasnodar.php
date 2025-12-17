<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/mobile-detect/Mobile_Detect.php';
$detect=new Mobile_Detect;

if ( $detect->isMobile() ) {
    $folder='b2';
	$folder_full='f2';

} 
elseif( $detect->isTablet() ){
    $folder='b2';
	$folder_full='f2';

}
else {
    $folder='b3';
	$folder_full='f3';
	$gallery='../section_cache.php';

}


$escorts='class="current"';

$css='/min/g=profile';
$script='/min/g=js-profile-en'; 
$flink='m-b.su/krasnodar';
$blink='images/krasnodar';
$slink='m-b.su/social/krasnodar';
$phone='79219000318';
$iPhone='+7 (921) 9000-318';
$telegram='TheMissBlissAgency';  

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/links.php';

?>