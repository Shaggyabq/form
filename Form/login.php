<?php
$name = !empty($_POST['name']) ? $_POST['name'] : null ;
$email = !empty($_POST['email']) ? $_POST['email'] : null ;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : null ;
?>
<html>
<body>
ФИО: <?= $name ?> <br>
Почта: <?= $email ?> <br>
Номер: <?= $tel ?> 
</body>
</html>