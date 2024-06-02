<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register Inclusio Mazzoni</title>
</head>
<body>
    <?php
    $con=new mysqli("localhost", "root", "", "register-login-inclusio");
    if(mysqli_connect_errno())
    {
        echo "Errore durante la connessione." .mysqli_connect_error();
        exit();
    }

    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    $nickname=$_POST['nickname'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO utenti (Nome, Cognome, Nickname, Telefono, Email, Password)  VALUES ('$nome', '$cognome', '$nickname', '$telefono', '$email', '$password');";
    $ris= $con->query($sql) or die("ERRORE");
    if ($ris == TRUE) {
        echo "Nuovo account creato con successo <br>";
        echo "<a href='login.html'> Vai al login. </a>";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
    $con->close();
    ?>
</body>
</html>
