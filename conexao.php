<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'pedro_root');
define('SENHA', '1826hxt8');
define('DB', 'ph_host');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');