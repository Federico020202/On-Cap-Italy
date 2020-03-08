<?php

if (isset($_POST['submit'])) {

    $Firstname = $_POST['Firstname'];
    $Secondname = $_POST['econdname'];
    $Email = $_POST['Email'];
    $Subjectmessage = $_POST['Subjectmessage'];
    $Message = $_POST['Message'];

    $mailTo = "felixsanti2002@gmail.com";
    $headers = "From: ".$Email;
    $txt = "Hai ricevuto una mail da ".$Firstname".\n\n"$message;



    mail($mailTo, $Subjectmessage, $txt, $headers);
    header("Location: index.php?mailsend");


}
