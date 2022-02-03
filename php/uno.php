<?php

if(isset($_POST['enviar'])){
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $mesage=$_POST['mesage'];
   
   
}

$subject = "Floza Motor Consultas";
    
$emailsSend = ["beto1perk@gmail.com"];
    
$to = "$emailsSend[0]";

$message = "
    <html>
    <head>
        <title>Email-FLOZAMOTOR ALQUILER DE CARROS Consultas</title>
    </head>
    <body>
    <p>Este <strong>mensaje de consulta</strong> fue enviado desde  https://flozamotor.com/</p>
    <table style='margin:0!important'>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#2F3780;color:#FFF;padding:8px;'><b>Nombres y Apellidos:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$name." ".$lname."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#2F3780;color:#FFF;padding:8px;'><b>Email:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$email."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#2F3780;color:#FFF;padding:8px;'><b>Telefono:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$phone."</td>
        </tr>
        <tr>
        <td style='margin:0!important;border:1px solid #444;background:#2F3780;color:#FFF;padding:8px;'><b>Mensaje:</b></td>
        <td style='margin:0!important;border:1px solid #444;padding:8px;'>".$mesage."</td>
        </tr>

    </table>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);

    header("location:url");

    ?>