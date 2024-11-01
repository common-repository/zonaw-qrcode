=== ZonaW QR Codes ===
Contributors: zonaw
Tags: qr code, mobile, barcode
Requires at least: 2.0
Tested up to: 3.0
Stable tag: trunk

This plugin generates a image with a QR code with the current post URL.

== Description ==

This plugin generates a image with a QR code with the current post URL. 
The users can use their Smartphones to take a photo of the QR Code and go to the post in their mobile web browser. You can see an example of the QR code in http://www.zonaw.com/2010/11/17/plugin-para-meter-qr-codes-en-tus-posts/

== Installation ==

1. Upload `zonaw_qrcode.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php showQRCode(); ?>` in your templates

== Frequently Asked Questions ==

= Who does generate the QR Code? =

The QR Code image is generated using Google Chart API.  

= Can get a QR Code in differents sizes? =

You can set the size of the QR code setting the width and the size in the showQRCOde function. Example:

`<?php showQRCode(250); ?>`

== Changelog ==

= 0.5 =
* First release

== Upgrade Notice ==

= 0.5 =
* First release
