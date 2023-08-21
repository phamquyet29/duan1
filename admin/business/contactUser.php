<?php
function mailForm(){
   adminRender('sendmail/index.php');
}
function sendMail(){
    $reccevier = $_POST['reccevier'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->CharSet = "UTF-8";
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "kmanh2894@gmail.com"; //người gửi
    $mail->Password = "wmmtoaspinshbgim"; //Mật khẩu ứng dụng
    $mail->SetFrom("Thông báo");
    $mail->Subject = $title;
    $mail->Body = $content;
    $arrEmail = explode(',',$reccevier);
    foreach($arrEmail as $email){
        $mail->AddAddress(trim($email)); //người nhận
    }

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
    }
?>