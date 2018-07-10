<?php
    
    $para = 'pedro@alejandrofernandez.com.ve';
    echo $_POST['nombre'].'\r';
    echo $_POST['mensaje'].'\r';
    echo $_POST['asunto'].'\r';
    echo $_POST['correo'].'\r';
    
    if( isset( $_POST["nombre"]) && isset( $_POST["mensaje"]) && isset( $_POST["asunto"]) && isset( $_POST["correo"]) ){

        $mensaje   = "Nombre: ".$_POST["nombre"]."\r\n".
        "Mensaje: ".$_POST["mensaje"];
        $titulo    = $_POST["asunto"];
        $cabeceras = 'From: '.$_POST["correo"] . "\r\n" .
        'Reply-To: pedro@alejandrofernandez.com.ve' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        echo $cabeceras;
        mail($para, $titulo, $mensaje,$cabeceras);
        header("Location: http://www.alejandrofernandez.com.ve/index.php?correo=1");

    }else{

        header("Location: http://www.alejandrofernandez.com.ve/index.php?correo=2");
        
    }

?>