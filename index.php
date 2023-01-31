<?php 
        session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label>Ваше имя</label>
        <input type="text" name="guest_name" required> 
        <button>Отправить</button>
    </form>
    <?php  
        if (isset($_GET['guest_name']) == true) {
            $guest_name =  $_GET['guest_name'];
            $_SESSION["name"] = $guest_name;
            echo 'Привет ' . $guest_name;  
        }else if (isset($_SESSION["name"]) == false) {
            $guest_name = "Anonim";
            echo 'Привет ' . $guest_name; 
        }else {
            echo 'Привет ' . $_SESSION["name"];   
        } 
    ?>
</body>
</html>