<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Укажите ваш SMTP сервер
    $mail->SMTPAuth = true;
    $mail->Username = 'anscompanyza@gmail.com'; // Ваш email
    $mail->Password = 'anscompany123'; // Пароль от почты
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    
    $mail->setFrom('anscompanyza@gmail.com', 'ANS Company');
    $mail->addAddress('recipient@example.com'); // Получатель
    
    $mail->isHTML(true);
    $mail->Subject = 'Новая заявка с сайта';
    $mail->Body = 'Содержание письма...';
    
    $mail->send();
    echo 'Письмо отправлено';
} catch (Exception $e) {
    echo "Ошибка: {$mail->ErrorInfo}";
}
?>