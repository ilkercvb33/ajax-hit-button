<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=jsbtn', 'root', '');
}catch(PDOException $e) {
    $e->getMessage();
}