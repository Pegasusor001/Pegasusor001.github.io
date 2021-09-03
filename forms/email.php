<?php
$to = "someone@example.com";         // 邮件接收者
$subject = "xxx";                // 邮件标题
$message = "Hello! xxxx";  // 邮件正文
$from = "donefierce@gmail.com";   // 邮件发送者
$headers = "From:" . $from;         // 头部信息设置
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>

<!-- <?php
require_once('PHPMailer/PHPMailerAutoload.php');
 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->SMTPAuth = ture;
 $mail->SMTPSecure = 'ssl';
 $mail->Host = "donefierce@gmail.com";
 $mail->Port = '465';
 $mail->isHTML();
 $mail->Username = 'linus.ji.001@gmail.com';
 $mail->Password = 'Firmly@913';
 $mail->SetFrom('donefierce@gmail.com');
 $mail->Subject = 'hello';
 $mail->Body = 'test';
 $mail->AddAddress('linus@gmail.com');

 $mail->Send();
?> -->
