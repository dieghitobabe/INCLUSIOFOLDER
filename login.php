<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Inclusio  Mazzoni</title>
</head>
<body>
    <?php
    $con=new mysqli("localhost", "root", "", "register-login-inclusio");
    if(mysqli_connect_errno())
    {
        echo "Errore durante la connessione." .mysqli_connect_error();
        exit();
    }

    $email=$_POST['email'];
    $password=$_POST['password'];
    $nickname=$_POST['nickname'];
    $sql="SELECT Email, Password FROM utenti WHERE Email='{$email}' AND Password='{$password}';";
    $ris=$con->query($sql) or die ("Errore nella sintassi della query");
    $numeroris=mysqli_num_rows($ris); 
    if($numeroris>0)
    {
        echo "<label>Benvenuto $nickname!</label><br>";
        echo "<a href='Inclusio.html'> Accedi ad Inclusio! </a> <br>"; //echo
        echo "<a href='login.html'> Effettua un altro accesso </a>"; //echo
    }
        else
        {
            echo "<label>Accesso negato, nessun account corrisponde alle credenziali inserite.</label> <br>"; //echo
            echo "<a href='login.html' > Effettua un altro accesso </a> <br>"; //echo
            echo "<a href='register.html' > Crea un account! </a>"; //echo
        }
        $con->close();
    ?>
</body>
</html>