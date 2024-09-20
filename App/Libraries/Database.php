<?php
try {
    $dbh = new PDO('mysql:host=localhost;
    dbname=blog', 'root', "123");
} catch (PDOException $e) {
    // tentar reconctar após algum intervalo, por exemplo 
    echo "error" .$e;
} 
