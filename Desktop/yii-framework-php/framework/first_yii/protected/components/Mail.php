<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Email {
/*
* แบบส่งผ่านด้วยบัญชี gmail
* และตั้งค่า SMTP
*
* GMAIL
* - smtp.gmail.com Port 465
* POP3: pop.gmail.com Port 995 เปิด SSL﻿
*
* HOTMAIL
* - smtp.live.com Port 25 หรือ 587 เปิด SSL﻿
* POP3: pop3.live.com Port 995
*
* YAHOO
* - smtp.mail.yahoo.com Port 465
* POP3: pop3.mail.yahoo.com Port 995
*
* AOL
* - smtp.aol.com Port 587
* POP3: pop.aol.com Port 110 เปิด SSL
*
*/

    /* use
     * <?php Email::sendGmail($from_name,$from_email, $to_name,$to_email, $subject, $message); ?>
     */
    public static function sendGmail($from_name,$from_email, $to_name,$to_email, $subject, $message){
        Yii::import('application.extensions.phpmailer.JPhpMailer'); // ดึง extension PHPMailer เข้ามาใช้งาน
        $mail = new JPhpMailer;
         
        // กำหนดการใช้งาน SMTP
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPKeepAlive = true;
        $mail->Mailer = "smtp";
        $mail->SMTPDebug = 0;
         
        // บัญชี Gmail
        $mail->Host = 'smtp.gmail.com'; // gmail server
        $mail->Port = '465'; // port number
        $mail->Username = 'louachenifarida@gmail.com'; // User Email
        $mail->Password = 'Dida@26031987oran'; // Pass Email
         
        // รูปแบบ Mail
        $mail->CharSet = 'utf-8';
        $mail->SetFrom($from_email, $from_name); // 
        $mail->AddAddress($to_email, $to_name); // to destination
        $mail->Subject = $subject; // subject หั
        $mail->MsgHTML($message); //
         
        $mail->Send(); 
    }
    
    public static function sendEmail($from, $mailTo, $subject, $message){
        /*
        * Mail Server ของตั
        */
        Yii::import('application.extensions.phpmailer.JPhpMailer'); //  extension PHPMailer 
        $mail = new JPhpMailer;
         
        $mail->Host = 'smtp.gmail.com'; // Host Yourname
        $mail->Username = 'farida'; // User Email Web
        $mail->Password = 'password'; // Pass Email Web
         
        $mail->CharSet = 'utf-8';
        $mail->SetFrom('louachenifarida@gmail.com', 'Admin'); // 
        $mail->AddAddress('farida@ifi.edu.vn', 'dida'); // to destination
        $mail->Subject = 'Subject Mail'; // subject หั
        $mail->MsgHTML('<h1>Testing!</h1>'); // Message
         
        $mail->Send(); // ส่
    }
}
?>