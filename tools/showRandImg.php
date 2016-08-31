<?php
	$img_height = 25;
	$img_width = 80;
	$mass = 200;
	$num="";
	$num_max = 6;
	for( $i=0; $i<$num_max; $i++ )
	{
		$num .= rand(0,9);
	}

	Session_start();
	$_SESSION["checkCode"] = $num;
	
	Header("Content-type: image/PNG");
	srand((double)microtime()*1000000);
	$im = imagecreate($img_width,$img_height);
	$black = ImageColorAllocate($im, 0,0,0);
	$gray = ImageColorAllocate($im, 200,200,200);
	imagefill($im,0,0,$gray);
	
	$style = array($black, $black, $black, $black, $black, $gray, $gray, $gray, $gray, $gray);
	imagesetstyle($im, $style);
	$y1=rand(0,$img_height);
	$y2=rand(0,$img_height);
	$y3=rand(0,$img_height);
	$y4=rand(0,$img_height);
	imageline($im, 0, $y1, $img_width, $y3, IMG_COLOR_STYLED);
	imageline($im, 0, $y2, $img_width, $y4, IMG_COLOR_STYLED);

	for( $i=0; $i<$mass; $i++ )
	{
		imagesetpixel($im, rand(0,$img_width), rand(0,$img_height), $black);
	}

	$strx=rand(3,8);
	for( $i=0; $i<$num_max; $i++ )
	{
		$strpos=rand(1,8);
		imagestring($im,5,$strx,$strpos, substr($num,$i,1), $black);
		$strx+=rand(8,14);
	}
	ImagePNG($im);
	ImageDestroy($im);
 ?>