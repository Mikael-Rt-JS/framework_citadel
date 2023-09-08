<?php

class Mail{
    public function sendToEmail($to,$subject,$message,$headers){
        mail($to,$subject,$message,$headers);
    }
    //потверждаем почту
    public function mailConfirmation($post){
        $name=$post['name'];
        $surname=$post['surname'];
        $to=$post['email'];
        $subject="Новый аккаунта/New account";
        $headers="From: urartubot.ru \r\n";
        //$headers.="Reply-To: mikael.vue@gmail.com \r\n";
        $headers.="X-Mailer: PHP/".phpversion()."\r\n";
        $headers.="Content-Type: text/html; charset=utf-8 \r\n";
        
        $message='<!DOCTYPE html><html><body>
<h3>Name: '.$name.' '.$surname.'</h3>
<p>Пройдите по ссылке для потверждение почты! </br> Follow the link to confirm your email!</p>
<a href="https://urartubot.ru/confirmation_mail.php">Ready</a>
</body></html>';

        $this->sendToEmail($to,$subject,$message,$headers);
    }
}
?>
