<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Inclusio Mazzoni</title>
</head>
<body>
    <?php
    $con=new mysqli("localhost", "root", "", "register-login-inclusio");
    if(mysqli_connect_errno())
    {
        echo "Errore durante la connessione." .mysqli_connect_error();
        exit();
    }

    $nickname=$_POST['nickname-contatta'];
    $email=$_POST['email-contatta'];
    $telefono=$_POST['telefono-contatta'];
    $messaggio=$_POST['messaggio-contatta'];
    $sql="INSERT INTO messaggicontatta (Nickname, Email, Telefono, Messaggio)  VALUES ('$nickname', '$email', '$telefono', '$messaggio');";
    $ris= $con->query($sql) or die("ERRORE");
    if ($ris == TRUE) {
        echo "Messaggio inviato con successo. <br>";
        echo "<a href='INCLUSIO.html'> Vai ad Inclusio. </a>";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
    $con->close();
    ?>
</body>
</html>