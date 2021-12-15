<?php
     require 'config.php';
     
     $nombre = $_POST['nombre'];
     $url = $_POST['url'];
    
     try{

        function obtenerIdVideo($surl){
            $url_parseada   =   explode("=",$surl);
            return $id  =   $url_parseada[1];
        }
        $video_id = obtenerIdVideo("$url");
     
        $conn= conexion();

        $insertarSQL = "INSERT INTO video.video (nombre, url) Values ('".$nombre."', '".$video_id."');";
     
        $conn ->query($insertarSQL);

        header('Location: index.php');
    
    }catch (Exception $e) {
        
        header('Location: index.php');
}

    ?>