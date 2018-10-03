<?php

    include_once('init/init.php');

    $sql = "SHOW DATABASES";
    $query = $pdo->prepare($sql);
    $query->execute();
    $bancos_padrao = ['information_schema','mysql','performance_schema'];
    $login = '';
    $senha = '';

    echo "<pre>";
    echo $_SERVER[HTTP_HOST];
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        if(in_array($row->Database,$bancos_padrao)){
            goto sair;
        }

        echo '<br>';
        $database = $row->Database;
        echo $database;    //Nome do banco

        //Select das tabelas do banco
        $pdo_o = new PDO('mysql:host=localhost;dbname='.$database.';port=3307;charset=utf8mb4',$login,$senha);
        $sql_t = "SHOW TABLES";
        $query_t = $pdo_o->prepare($sql_t);
        $query_t->execute();

        echo "<ul>";
        while($row_t = $query_t->fetch(PDO::FETCH_ASSOC)){
            echo "<li>";
            echo $row_t["Tables_in_$database"];
            echo "</li>";
        }
        echo "</ul>";
        $pdo_o = null;

        sair:
    }