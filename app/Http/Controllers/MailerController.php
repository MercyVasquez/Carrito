<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerController extends Controller
{
        // =============== [ Email ] ===================
        public function email() {
            return view("email");
        }
    
    
        // ========== [ Compose Email ] ================
        public function composeEmail(Request $request) { //es esto
            require base_path("vendor/autoload.php");
            $mail = new PHPMailer(true);     //Passing `true` enables exceptions
    
            try {
    
                // Email server settings
                $mail->SMTPDebug = 1;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';             //  smtp host
                $mail->SMTPAuth = true;
                $mail->Username = 'mercidalmanzar@gmail.com';   //  sender username
                $mail->Password = 'luzmaribel4';       // sender password
                $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
                $mail->Port = 465;                          // port - 587/465
    
                $mail->setFrom('mercidalmanzar@gmail.com', 'Para Mercy');
                $mail->addAddress($request->emailRecipient);
                $mail->addCC('mercidalmanzar@gmail.com');
                $mail->addBCC('mercidalmanzar@gmail.com');
    
                $mail->addReplyTo('mercidalmanzar@gmail.com', 'De Mercy');
               if(isset($_FILES['emailAttachments'])) {
                    for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                        $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                        
                    }
               }
    
    
                $mail->isHTML(true);                // Set email content format to HTML
    
                $mail->Subject = $request->emailSubject;
                $mail->Body    = $request->emailBody;
    
                // $mail->AltBody = plain text version of email body;
    
                if( !$mail->send() ) {
                    return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
                }
                
                else {
                    return back()->with("success", "Email has been sent.");
                }
    
            } catch (Exception $e) {
                 return back()->with('error','Message could not be sent.');
            }
        }    
}