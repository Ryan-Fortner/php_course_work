<?php
var_dump($_POST);
?>


<p>Hi <?=$_POST['name'] ?>! Thanks for purchasing <?=$_POST['item'] ?>.</p>
<p>An email will be sent to <?= $_POST['email']?>.</p>