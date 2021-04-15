<?php
    $paginaactual = basename($_SERVER['PHP_SELF']);

    function connect()
{
    $db_serv="localhost";
    $db_user="root";
    $db_pass="";
    $db_id="bkpf_db_20174754";

    if(!mysqli_connect($db_serv,$db_user,$db_pass,$db_id)){
        echo "<h4> Error de base de datos:</h4>";
        $error = @mysqli_connect_error();
        echo "$error";
        exit(0);
    }
    else{
        return mysqli_connect($db_serv,$db_user,$db_pass,$db_id);
    }
}

function entrarDatos($save){
    if(mysqli_query(connect(), $save) ) 
    {
        if (isset($_POST['demo-chk'])){
            echo '<h4>Tu demo se ha enviado correctamente.</h4>';
        }
        else if (isset($_POST['memb-chk'])){
            echo '<h4>Felicitaciones, ya eres miembro de Audio Hall.</h4>';
        }
    }
        else
        {
            echo"<h3>Lo sentimos, ha habido un error en la base de datos. Intente más tarde.</h3>";
        }
}

function formProcess(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['demo-chk'])){
                            $nombre = $_POST['demo-nombre'];
                            $apellido = $_POST['demo-apellido'];
                            $ciudad = $_POST['demo-ciudad'];
                            $pais = $_POST['demo-pais'];
                            $tipo = $_POST['demo-tipo'];
                            $enlace = $_POST['demo-enlace'];
                            $correo = $_POST['demo-email'];
                            $save="
                                INSERT INTO demo 
                                    (nombre, apellido, ciudad, pais, tipo, enlace, correo)
                                VALUES
                                    ('$nombre', '$apellido', '$ciudad','$pais', '$tipo', '$enlace', '$correo')";
                            entrarDatos($save);
            }
            if (isset($_POST['memb-chk'])){
                            $nombre = $_POST['memb-nombre'];
                            $apellido = $_POST['memb-apellido'];
                            $ccn = md5($_POST['memb-ccn']);
                            $ccexp = md5($_POST['memb-ccexp']);
                            $cvv = md5($_POST['memb-cvv']);
                            $ciudad = $_POST['memb-ciudad'];
                            $pais = $_POST['memb-pais'];
                            $postal = $_POST['memb-postal'];
                            $correo = $_POST['memb-email'];
                            // nombre	apellido	ccn	ccexp	cvv	ciudad	pais	postal	correo	
                            $save="
                                INSERT INTO membresia 
                                    (nombre, apellido, ccn, ccexp, cvv, ciudad, pais, postal, correo)
                                VALUES
                                    ('$nombre', '$apellido', '$ccn','$ccexp', '$cvv', '$ciudad', '$pais', '$postal', '$correo')";
                            entrarDatos($save);
            }
        }
    
}
?>