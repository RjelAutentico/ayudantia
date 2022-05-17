<?php 
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "ayudantia";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if(mysqli_connect_errno()){
    echo "Error al conectar a la base de datos";
}



$consult = $con->query("SELECT id, url from Imagenes")

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Listar</title>
</head>
<body style="display:flex;justify-content:center;align-items:center;flex-direction:column;  margin:0">

<h1 style="color: black; margin:5px 0 0 0">Actividad Listar</h1>

<div class="container" >
    <table class="table" >
        <thead  >
            <tr >
                <th >ID</th>
                <th >URL</th>
            </tr>
        </thead>

    <tbody>
    <?php
        foreach ($consult as $co) {
    ?>
        <tr>
            <td>
                <a href= " <?php echo $co['url'] ;?> " >
                    <?php echo $co['id'];?>
                </a>
            </td>

            <td>
                <a href= " <?php echo $co['url'] ;?> " >
                    <?php echo $co['url'] ;?> 
                </a>
            </td>
        </tr>
    <?php
        } 
    ?>
    </tbody>
    </table>
</div>

</body>
</html>