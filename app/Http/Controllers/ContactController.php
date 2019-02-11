<?php

namespace app\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 
use Illuminate\Http\Request;
use app\Contact as Contact;

class ContactController extends Controller
{
    function returnView() {
    	return view('Contact');
    }
    
    function storeProjet(Request $request) {
        if ($request->input('name.0') !== NULL) {
        // $name = $request->input('name.0');
            $contacter = new Contact();
            $contacter->name=$request->input('name.0');
            $contacter->sujet=$request->input('sujet.0');
            $contacter->mail=$request->input('mail.0');
            $contacter->numero=$request->input('numero.0');
            $contacter->message=$request->input('message.0');
            $contacter->save();
            
            
        } else if ($request->input('name.1') !== NULL) {
            $contacter = new Contact();
            $contacter->name=$request->input('name.1');
            $contacter->sujet=$request->input('sujet.1');
            $contacter->mail=$request->input('mail.1');
            $contacter->numero=$request->input('numero.1');
            $contacter->message=$request->input('message.1');
            $contacter->save();
        }


        //envoi du mail :
        if (isset($_POST['envoyer'])) {
          if ($_POST['name'][0] !== '') {
            $name=$_POST['name'][0];
            $mailSender=$_POST['mail'][0];
            $numero=$_POST['numero'][0];
            $sujet=$_POST['sujet'][0];
            $textarea=htmlspecialchars($_POST['message'][0], ENT_QUOTES);
        } else {
          $name=$_POST['name'][1];
          $mailSender=$_POST['mail'][1];
          $numero=$_POST['numero'][1];
          $sujet=$_POST['sujet'][1];
          $textarea=htmlspecialchars($_POST['message'][1], ENT_QUOTES);
          
      }

      $destinataire ='aleth@arriasal.fr';
//php mailer:


      // require ('vendor/autoload.php');
$mail = new PHPMailer(true);  // Passing `true` enables exceptions
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
$mail->CharSet = 'UTF-8';
$content = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title>Hello myself</title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
.ReadMsgBody { width:100%; }
.ExternalClass { width:100%; }
.ExternalClass * { line-height:100%; }
body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
    @-ms-viewport { width:320px; }
    @viewport { width:320px; }
    }</style><!--<![endif]--><!--[if mso]>
    <xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml>
    <![endif]--><!--[if lte mso 11]>
    <style type="text/css">
    .outlook-group-fix { width:100% !important; }
    </style>
    <![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Roboto:300,500);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
        .mj-column-per-60 { width:60% !important; max-width: 60%; }
        .mj-column-per-40 { width:40% !important; max-width: 40%; }
        .mj-column-per-100 { width:100% !important; max-width: 100%; }
        .mj-column-per-45 { width:45% !important; max-width: 45%; }
        }</style><style type="text/css">@media only screen and (max-width:480px) {
          table.full-width-mobile { width: 100% !important; }
          td.full-width-mobile { width: auto !important; }
          }</style></head><body><div><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:360px;" ><![endif]--><div class="mj-column-per-60 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Roboto, Helvetica, sans-serif;font-size:10px;font-weight:300;line-height:24px;text-align:left;color:#616161;">Portfolio</div></td></tr></table></div><!--[if mso | IE]></td><td class="" style="vertical-align:top;width:240px;" ><![endif]--><div class="mj-column-per-40 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="right" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:300;line-height:24px;text-align:right;color:#616161;"><a>www.arriasal.fr</a></div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:550px;"><a href="https://recast.ai?ref=newsletter" target="_blank"><img height="auto" src="https://cdn.recast.ai/newsletter/city-01.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="550"></a></td></tr></tbody></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:300;line-height:24px;text-align:center;color:#616161;">J\'ai reçu un mail envoyé via mon portfolio!</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:270px;" ><![endif]--><div class="mj-column-per-45 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="center" style="font-size:0px;padding:0px;word-break:break-word;"><div style="font-family:Roboto, Helvetica, sans-serif;font-size:18px;font-weight:500;line-height:24px;text-align:center;color:#616161;">Voici le message:</div></td></tr><tr><td style="font-size:0px;padding:10px 25px;word-break:break-word;"><p style="border-top:solid 2px #616161;font-size:1;margin:0px auto;width:100%;"></p><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 2px #616161;font-size:1;margin:0px auto;width:220px;" role="presentation" width="220px" ><tr><td style="height:0;line-height:0;"> &nbsp;
          </td></tr></table><![endif]--></td></tr><tr><td style="font-size:0px;padding:10px 25px;word-break:break-word;"><p style="border-top:solid 2px #616161;font-size:1;margin:0px auto;width:45%;"></p><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 2px #616161;font-size:1;margin:0px auto;width:71.5px;" role="presentation" width="71.5px" ><tr><td style="height:0;line-height:0;"> &nbsp;
          </td></tr></table><![endif]--></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;padding-top:30px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"><tr><td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:300;line-height:24px;text-align:left;color:#616161;"><p>Il a été envoyé par name'.$name.'</p><p>Numéro: '.$numero.'</p><p>Mail: '.$mailSender.'</p><p>Sujet: '.$sujet.'</p><p>Contenu du message: '.$textarea.'</p></div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></body></html>';

//Set who the message is to be sent from
          $mail->setFrom('postmaster@aletharrias.com', 'Portfolio Aleth');

//Set an alternative reply-to address
          $mail->addReplyTo($mailSender, $name);
//Set who the message is to be sent to
          $mail->addAddress($destinataire, $destinataire);
//Set the subject line
          $mail->Subject = 'Formulaire de contact portfolio';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
          $mail->Body    = $content;
          $mail->AltBody = 'Formulaire de contact portfolio';
//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors

          if (!$mail->send()) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
              echo "Un problème s'est produit lors de l'envoi de votre mail. Veuillez recommencer s'il-vous-plaît.";
          } else {
    // echo "Message sent!";
           echo "Votre message m'a bien été transmis. Vous recevrez bientôt une réponse. ";
           echo "Cliquez <a href='https://www.aletharrias.com'>ici</a> pour retourner sur mon portfolio.";
           
       }
   }


   return view('Accueil');
   
 // $name = $request->input('name.0');
 //        $contacter = new Contact();
 //        $contacter->name=$request->name;
 //        $contacter->sujet=$request->sujet;
 //        $contacter->mail=$request->mail;
 //        $contacter->numero=$request->numero;
 //        $contacter->message=$request->message;
 //        $contacter->save();
 //        echo $contacter;
//             return redirect('/',['ok'=>"message"]);

//        [
//     'titre' => request('name'),
//     'principe' => bcrypt(request('sujet')),
// ];
//         echo request('name');
   
}
}
