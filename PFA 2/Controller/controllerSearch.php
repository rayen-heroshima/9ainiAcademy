<?php

$userData = json_decode(file_get_contents('php://input'));
echo($userData);
?>