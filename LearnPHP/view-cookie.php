<?php

echo "cookie value : " . $_COOKIE["user"];
setcookie("user","", time()-(86400*30), "/");

?>