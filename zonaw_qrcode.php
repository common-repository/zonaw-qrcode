<?php
/**
 * @package ZonaW QRCode
 * @version 0.5
 */
/*
Plugin Name: ZonaW QRCode
Plugin URI: http://www.zonaw.com/2010/11/17/plugin-para-meter-qr-codes-en-tus-posts/
Description: This Plugin insert a image in the post with its url encodeded in QRCode
Version: 0.5
Author URI: http://www.zonaw.com/
*/

function generateQRCode($qr_code_text, $qr_code_size)
{
	$qr_code_url = "http://chart.apis.google.com/chart?chs=" . $qr_code_size . "x" . $qr_code_size . "&amp;cht=qr&amp;chl=". urlencode($qr_code_text) . "&amp;choe=UTF-8";
	return $qr_code_url;
}


function showQRCode ($qr_code_size = 150)
{
	if (is_single()) echo "<a href='".generateQRCode(get_permalink(), 500)."'><img src='".generateQRCode(get_permalink(), $qr_code_size)."' alt='C&oacute;digo QR para este post' /></a>";
}


?>
