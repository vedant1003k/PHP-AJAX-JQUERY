
<?php

$name = $_POST['name'];
setcookie('user', $name, time() + 60);

echo "Cokkie set" . $name;

?>