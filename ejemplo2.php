<?php
    $prueba = $_POST['nombre'];
    $ftp_server = "192.168.1.154";
    $ftp_usuario = "ftpuser";
    $ftp_pass = "ubuntu";
    $con_id = ftp_ssl_connect($ftp_server);
   // $lr = ftp_login($con_id,$ftp_usuario, $ftp_pass);
    if (!ftp_login($con_id, $ftp_usuario, $ftp_pass)) {
        die("Login Failed");
        echo 'no se pudo conectar';
        exit;
    }else{
        //ftp_pasv($ftp, true);
        echo 'conectando correctamente';
        echo $prueba;
        $temp = explode(".", $_FILES['file']['name']);
        $source_file = $_FILES['file']['tmp_name'];
        $destino = "/files";
        $nombre = $_FILES["file"]['name'];
        $subio = ftp_put($con_id, $destino.'/'.$nombre, $source_file, FTP_BINARY);
        if ($subio) {
            header("Location: ftp.php");
        }else{
            echo 'ha ocurrido un error';
        }
    }
    /*$ftp_server = "192.168.1.154";
    $ftp_user_name = "ftpuser";
    $ftp_user_pass = "ubuntu";
    // establecer una conexión básica
    $conn_id = ftp_ssl_connect($ftp_server); 

    // iniciar una sesión con nombre de usuario y contraseña
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

    // verificar la conexión
    if ((!$conn_id) || (!$login_result)) {  
        echo "¡La conexión FTP ha fallado!";
        echo "Se intentó conectar al $ftp_server por el usuario $ftp_user_name"; 
        exit; 
    } else {
        echo "Conexión a $ftp_server realizada con éxito, por el usuario $ftp_user_name";
    }
    $destination_file = 
    $source_file = $_FILES['subir']['tmp_name'];

    // subir un archivo
    $upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);  

    // comprobar el estado de la subida
    if (!$upload) {  
        echo "¡La subida FTP ha fallado!";
    } else {
        echo "Subida de $source_file a $ftp_server como $destination_file";
    }

    // cerrar la conexión ftp 
    ftp_close($conn_id);*/
?>