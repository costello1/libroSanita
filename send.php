<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $to = "ciottimarisa@alice.it";
    $subject = "Contatto per il libro". "\n\n";
    $txt = "Nome mittente: " . $_POST["nome-mittente"] . "\n\n". "Cognome mittente: " . $_POST["cognome-mittente"] . "\n\n". "Email mittente: ".  $_POST["email-mittente"]. "\n\n". "Numero telefono mittente: " . $_POST["numero-telefono"] . "\n\n". $_POST["testo-messagio"];
    $headers = "From: " . $_POST["email-mittente"];
    $headers .= 'Reply-To: ' . $to . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    mail($to, $subject, "Richiesta messaggio per il libro:". "\n\n". $txt, $headers);
    echo 'Email Sent.<br>';
    echo $txt;
    ?>
</body>

</html>