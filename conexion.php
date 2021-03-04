<?php

    $con = new mysqli("localhost", "root", "", "base de datos usuario");

    if($con){
        $sql = "SELECT * FROM contactos";
        $query = $con -> query($sql);
        
        $data = array();
        while($r=$query->fetch_assoc()){
            $data[]=$r;
        }
        echo json_encode(array("contactos"=>$data));
    }else{
        echo("No se conecto);
    }
?>