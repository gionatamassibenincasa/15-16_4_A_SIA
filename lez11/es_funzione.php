<?php
    function eq_retta($x) {
        $m = 1;
        $q = 10;
        $y = $m * $x + $q;
        
        return $y;
    }
    
    $im = imagecreate(100, 150);
    $background_color = imagecolorallocate($im, 255, 255, 255);
    $red_color = imagecolorallocate($im, 255, 0, 0);
    
    
    for ($x = 0; $x<101; $x++) {
        $y = eq_retta($x);
        echo "$x -> $y\n";
        imagesetpixel($im, $x, 150-$y, $red_color);
    }
        
    imagepng($im, "retta.png");
    imagedestroy($im);
?>
