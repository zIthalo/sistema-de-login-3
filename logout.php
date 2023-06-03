<?php

session_start(); //precisa-se iniciar a sessão aqui para poder desliga-la depois

unset($_SESSION['id']);//Este comando desfaz uma sessão desliga a mesma.

header("Location: login.php"); //quando ela é desligada mandamos para o login.php
?>