<?php
//Conexao com o banco de dados

$servername="localhost";
$username="root";
$password="";
$db_name="crud";

$connect = mysqli_connect($servername,$username,$password,$db_name);
mysqLi_set_charset($connect, "utf8");
if(mysqli_connect_error()):
	echo "Erro na conexao :".mysql_connect_error();
endif;
