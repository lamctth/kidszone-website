<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    // smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "caominhquan02@gmail.com";
    $mail->Password = 'yidkrlfdnqmqidsb';
    $mail->Port = 587;
    $mail->SMTPSecure = "tsl";

    // email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("caominhquan02@gmail.com");
    $mail->Subject = $name . '-' . $phone;
    $mail->msgHTML($message, __DIR__);

    if ($mail->send()) {
        $status = "success";
        $response = "Email is sent!";
    } else {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
