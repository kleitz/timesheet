<?php
/*
 *
 * Programming by Yuri Koval'ov
 * http://www.yurikoval.com/
 * http://blog.yurikoval.com/php-analog-clock-2
 * v. 1.1
 *
 * */
$bg_options = array(
	0 => 'black.jpg',
	1 => 'back.jpg',
	2 => 'back.jpg',
);

// set defaults
if (isset($_REQUEST['tz'])) date_default_timezone_set($_REQUEST['tz']);
$now = (empty($_REQUEST['t'])) ? time() : strtotime($_REQUEST['t']);
$bg = (empty($_REQUEST['bg'])) ? 0 : (int) $_REQUEST['bg'];
$color = (empty($_REQUEST['color'])) ? 'ffffff' : $_REQUEST['color'];
$text = (empty($_REQUEST['text'])) ? '' : $_REQUEST['text'];
$font = (empty($_REQUEST['font'])) ? 5 : (int) $_REQUEST['font'];



$clock = imagecreatetruecolor(200,200);
$back = imagecreatefromjpeg($bg_options[$bg]);

$c = rgb2array($color);
$color = imagecolorallocate($clock,$c['r'],$c['g'],$c['b']);

new_hand(1,100,6,$color);
imagecopy($clock,$back,0,0,0,0,200,200);

new_hand(intval(date("i", $now))/60*360,80,3,$color);
new_hand(intval(date("g", $now))/12*360+(intval(date("i", $now))/60*360/12),50,5,$color);

// Enable the following for 
//new_hand(intval(date("s", $now))/60*360,70,1,$color);
//

imagestring($clock, $font, 5, 180, $text, $color);
header("Content-type: image/jpeg");
imagejpeg($clock);
imagedestroy($clock);


function new_hand($angle,$length,$thickness,$color)
{
	global $clock;
	// calculate C
	$length *= 2;
	while($angle >= 360)
	{
		$angle = $angle - 360;
	}
	$rad = $length / 2;
	$seg = pi()/round(64*$rad);
	$res = 1;             // scale
	$x = 100;               // start point
	$y = 92;
	$i = deg2rad($angle);
	$x_c = round(sin($i)*$rad*$res)+round($x);
	$y_c = -round(cos($i)*$rad*$res)+round($y);

	$rad = $thickness / 2;
	$i = deg2rad($angle-90);
	$x_a = round(sin($i)*$rad*$res)+round($x);
	$y_a = -round(cos($i)*$rad*$res)+round($y);
	$x_b = -round(sin($i)*$rad*$res)+round($x);
	$y_b = round(cos($i)*$rad*$res)+round($y);

	$plots = array(
		$x_a,$y_a,
		$x_b,$y_b,
		$x_c,$y_c,
	);
	imagefilledpolygon($clock,$plots,3,$color);
}

function rgb2array($rgb) {
    return array(
        'r' => base_convert(substr($rgb, 0, 2), 16, 10),
        'g' => base_convert(substr($rgb, 2, 2), 16, 10),
        'b' => base_convert(substr($rgb, 4, 2), 16, 10),
    );
}

?>
