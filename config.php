<?php

define('DB_SERVER','LOCALHOST');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','loginn');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn==false){
    dir('Error: cannot connect');
}


?>