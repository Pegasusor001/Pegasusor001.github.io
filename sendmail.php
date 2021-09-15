<?php
    require_once "Smtp.class.php";
    //******************** Configuration ********************************
    $smtpserver = "ssl://smtp.qq.com"; //SMTP server
    $smtpserverport =465; //SMTP server port

    $smtpmailfrom = "651524014@qq.com"; //SMTP email address 
    $smtpemailto = 'linus.ji.001@gmail.com'; //receiver address
    $smtpemailfromemail = $_POST['email'];
    $smtpemailtoname = $_POST['name'];
    
    $smtpuser = "651524014@qq.com";//SMTP server address
    
    $smtppass = "wwyinqqesbevbfff";//SMTP server password wwyinqqesbevbfff

    $mailtitle = $_POST['subject'];//email theme
    $mailcontent = "<h1>".$_POST['message'].'<br>'."from ".$_POST['email']."</h1>";//content
    $mailtype = "HTML";//email format（HTML/TXT）,TXT is plain text content

    //************************ smtp configuration ****************************
    $smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//true means using the authentication
    $smtp->debug = false; //check whether email is sent successfully 
    $state = $smtp->sendmail($smtpemailtoname,$smtpemailto, $smtpmailfrom, $mailtitle, $mailcontent, $mailtype);

    echo "<div style='width:300px; margin:36px auto;'>";
    if($state==""){
        echo "Sorry, email is not send";
        exit();
    }
    echo "Email successfully send, Mr. Ji will reply as soon as possible";
    echo "</div>";

?>