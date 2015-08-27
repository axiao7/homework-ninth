<?php
    $name = $_POST["name"];
    $password = $_POST["password"];
    $returnData = Array(
    	"name" => $name,
    	"password" => $password
    );
    echo json_encode($returnData);
?>