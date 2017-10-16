<?php
$TO = "jm.garnier002@gmail.com";

$h  = "From: " . $TO;
$subject = "MAIL";
$message = "";

while (list($key, $val) = each($_POST)) {
    $message .= "$key : $val\n";
}

mail($TO, $subject, $message, $h);

Header("Location: merci.htm");

?>