<?php

$to = 'rajasubhankhan01@gmail.com.com';

$username= $_POST["username"];
$email= $_POST["email"];
$text= $_POST["message"];

// $doc = $_FILES['doc']['name'];
// $doc_tmp = $_FILES['doc']['tmp_name'];

// $doc = str_replace(' ', '', $doc);

//     move_uploaded_file($doc_tmp,"jobcv/$doc");


$headers = "From: " . $email . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message ='<table style="width:100%">
   
    <tr>
        <td>'.$username.' </td>
    </tr>
    <tr><td>Email: '.$email.'</td></tr>
    <tr><td>Name: '.$username.'</td></tr>
    <tr><td>Text: '.$text.'</td></tr>

    <tr><td>Link to download cv: http://pipsgang.com/gfsbuilders/jobcv/'.$doc.'</td></tr>
    
</table>';

if (@mail($to, $email, $message, $headers))
{
    echo "Mail send successfully";
}else{
    echo 'failed';
}

?>