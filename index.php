<?php include 'config.php' ;?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação OO</title>
</head>
<body>
    <ul>
        <?php
                $provas = $pdo->prepare("SELECT * FROM  `provas` WHERE `status` = 1 ORDER BY `id` DESC");
                $provas->execute();

                while ($row = $provas->fetchObject()) {
        ?>  

        <li> 
           <a href="prova.php?prova=<?php echo $row->id;?>">  
           <?php echo $row->titulo;?>    
           </a>
        </li>
        <?php }?>
    </ul>
    </body>
</html>