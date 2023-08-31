<?php

@$post = $_POST;

$mail_from = $post['email'];
$to = "gopinathkrm@gmail.com";

$yourname = $post['name'];
$phone  = $post['phone'];
$subject  = $post['subject'];
$message  = $post['message'];

$htmlContent = '
    <html>
    <head>
    </head>
    <body>
        <table cellspacing="0" style="border: 2px solid #FB4314; width: 300px; height: 200px;">
            <tr>
                <th>Name:</th><td>'.$yourname.'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td>'.$mail_from.'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Phone:</th><td>'.$phone.'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Subject:</th><td>'.$subject.'</td>
            </tr>
             <tr style="background-color: #e0e0e0;">
                <th>Message:</th><td>'.$message.'</td>
            </tr>

                        
        </table>
    </body> 
    </html>';

$htmlContent;

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:". $mail_from. "\r\n";
$headers .= "Reply-To: ".$mail_from. "\r\n";
$headers .= "Return-Path: ".$mail_from. "\r\n";
$headers .= "CC: ".$to. "\r\n";
$headers .= "BCC: ".$to. "\r\n";
$headers.= 'Content-type: text/html; charset=iso-8859-1 \r\n';

if ( mail($to,$subject,$htmlContent,$headers) ) {
   echo "Mail sent successfully..";
   } 
   else 
   {
   echo "Error!!... Please try after sometime";
   }
?>
