<?php

include '../PHPMailer-master/src/Exception.php';
include '../PHPMailer-master/src/PHPMailer.php';
include  '../PHPMailer-master/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug=SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'huydeptrai19062002@gmail.com';
        $mail->Password = 'cgoumuuliygvqkqp';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('huydeptrai19062002@gmail.com', 'An Nam Market');
        $mail->addAddress('huydeptrai19062002@gmail.com','Nguyen Quang Huy');
        $mail->isHTML(true);
        $mail->Subject=' AN Nam Market';
        $mail->Body='XIn chào, Tôi tên là huy';
        // $mail->AltBody='Day la mail cua An Nam Market';
        $mail->send();
        echo "Mail đã gửi";
    }catch (Exception $e){
        echo "Gửi bị lỗi";
    }



?>
