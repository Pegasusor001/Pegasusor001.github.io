<?php
$to = "someone@example.com";         // 邮件接收者
$subject = "xxx";                // 邮件标题
$message = "Hello! xxxx";  // 邮件正文
$from = "donefierce@gmail.com";   // 邮件发送者
$headers = "From:" . $from;         // 头部信息设置
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>