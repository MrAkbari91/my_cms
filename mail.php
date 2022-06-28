
<?php
require "vendor/autoload.php"; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$subject = $_POST['subject'] ;
$message = $_POST['message'] ;


// mail jai 6 k nai e chek karva mate 
// localhost to mailtrap

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = '44e14c1f5ca891';
$mail->Password = '96b4c7b1250933';


$mail->addReplyTo('info@mailtrap.io', 'Mailtrap');
$mail->addAddress('recipient1@mailtrap.io', 'Tim');



$mail->Subject = $subject;                          //form mathi subject variable 
$mail->isHTML(true);

$mailContent = "<p>From: $name<p> 
<p>E-Mail: $email</p>
<p>message: $message </p>" ;



$mailContent = '<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8">
<tr>
<td>
    <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
        align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td style="height:80px;">&nbsp;</td>
        </tr>
        <!-- Logo -->

        <tr>
            <td style="height:20px;">&nbsp;</td>
        </tr>
        <!-- Email Content -->
        <tr>
            <td>
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                    style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
                    <tr>
                        <td style="height:40px;">&nbsp;</td>
                    </tr>
                    <!-- Title -->
                    <tr>
                        <td style="padding:0 15px; text-align:center;">
                            <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;">Contact form</h1>
                            <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
                            width:100px;"></span>
                        </td>
                    </tr>
                    <!-- Details Table -->
                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0"
                                style="width: 100%; border: 1px solid #ededed">
                                <tbody>
                                    <tr>
                                        <td
                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                            Name:</td>
                                        <td
                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                            '.$name.'</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                            Email:</td>
                                        <td
                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                           '.$email.'</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                            Subject:</td>
                                        <td
                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                            '.$subject.'</td>
                                    </tr>
                                    <tr>
                                        <td
                                            style="padding: 10px; border-bottom: 1px solid #ededed;border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                            Messege:</td>
                                        <td
                                            style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                            '.$message.'</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:40px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
</td>
</tr>
</table>' ; // formate to disply msg in body
$mail->Body = $mailContent;

if($mail->send()){
    header("Location: contact.php?status=success");
}else{
    header("Location: contact.php?status=failed");
$mail->ErrorInfo;
}
?>