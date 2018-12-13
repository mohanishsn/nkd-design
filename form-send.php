<?php
// if(isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['project']) && isset($_POST['budget'])){
$name = $_POST['name'];
$tel = $_POST['tel'];
$project = $_POST['project'];
$budget = $_POST['budget'];
$trimName = strtolower(trim($name));

$header = "From: $name <".$tname."@noreply.com>\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
$header.= "X-Priority: 1\r\n"; 

$mailBody = "Name: $name\nTelephone: $tel";

$status = mail("mohanishsn@gmail.com", "Form to email message", $mailBody, $header);
if($status) {
    echo "Success";
} else {
    echo "fail";
}
// }
?>