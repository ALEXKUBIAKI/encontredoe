<?php

define ('HOST', 'localhost');
define ('USUARIO', 'root');
define ('SENHA','');
define ('DB','encontredoe');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Erro na conexão!');


?>
