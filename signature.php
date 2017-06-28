<?php
/**
  * @author Jared Sloan
  * @author www.jaredpsloan.com
 * This program uses the php gd library to accept business card data submitted from the form on
 * index.html and creates a simple formatted business card, downloadable as a .jpeg */

//Gets variables from form for the business card
$name = ucwords($_GET["name"]);
$title = ucwords($_GET["title"]);
$street = ucwords($_GET["street"]);
$city_state = ucwords($_GET["city_state"]);
$phone = $_GET["phone"];
$email = $_GET["email"];
$url = $_GET["url"];

//Functions to get first and last initials
function initials($string) {
    $initials = '';
    foreach (explode(' ', $string) as  $letter) {
        $initials .= strtoupper($letter[0]);
      }
      $first = substr($initials, 0, 1);
      $last = substr($initials, -1);
      $initials = $first . $last;
      return $initials;
}

$initials = initials($name);

//Sets parameters for the business card
$signature = imagecreate (523, 227);
$font = "./arial.ttf";
$background = imagecolorallocate( $signature, 255, 255, 255);
$text_color = imagecolorallocate( $signature, 0, 76, 153);
$link_color = imagecolorallocate( $signature, 0, 0, 225);
imagettftext($signature, 14, 0, 200, 55, $text_color, $font, $name);
imagettftext($signature, 14, 0, 200, 75, $text_color, $font, $title);
imagettftext($signature, 14, 0, 200, 95, $text_color, $font, $street);
imagettftext($signature, 14, 0, 200, 115, $text_color, $font, $city_state);
imagettftext($signature, 14, 0, 200, 135, $link_color, $font, $phone);
imagettftext($signature, 14, 0, 200, 155, $link_color, $font, $email);
imagettftext($signature, 14, 0, 200, 175, $link_color, $font, $url);
imagettftext($signature, 66, 0, 20, 175, $link_color, $font, $initials);
imagesetthickness ($signature, 1);
imageline($signature, 200, 180, 522, 180, $link_color);


//Creates image
header( "Content-type: image/png" );
imagepng($signature);
imagecolordeallocate($signature, $line_color );
imagecolordeallocate($signature, $text_color );
imagecolordeallocate($signature, $background );
imagedestroy($signature);


?>
