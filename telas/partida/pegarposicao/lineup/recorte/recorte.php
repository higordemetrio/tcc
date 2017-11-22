<?php
    if (isset($_POST['imagem']) && 
        isset($_POST['x1']) && 
        isset($_POST['y1']) &&
        isset($_POST['w']) && 
        isset($_POST['h']))
    {

        $targ_w = $_POST['w'];
        $targ_h = $_POST['h'];
        $jpeg_quality = 90;

        $src = $_POST['imagem'];
        $img_r = imagecreatefromjpeg($src);
        $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

        imagecopyresampled($dst_r,$img_r,0,0,$_POST['x1'],$_POST['y1'],
        $targ_w,$targ_h,$_POST['w'],$_POST['h']);
        
        header('Content-type: image/jpeg');
        imagejpeg($dst_r,"files/imgrecortada.png",$jpeg_quality);   
        
        header("Location: posicao.php?w=".$targ_w."&h=".$targ_h."");
    } else {
        echo 'error';
    }
?>