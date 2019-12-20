<?php

namespace Core\Controller\Helpers;

use Core\Controller\Controller;

class SendMailController extends Controller
{
    public static function sendMail($setTo, $obj, $msgHTML, $msgPlain, $setBcc = true)
    {
        $setFrom = getenv('MAIL_FROM');
        // Create the Transport
        $transport = (new \Swift_SmtpTransport('MailCatcher', 25));

        // Create the Mailer using your created Transport
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        if (!is_array($setTo)) {
            $setTo = [$setTo];
        }
        if ($setBcc) {
            $message = (new \Swift_Message($obj))
                ->setFrom([$setFrom])
                ->setBcc($setTo)
                ->setBody($msgHTML, 'text/html')
                ->addPart($msgPlain, 'text/plain');
        } else {
            $message = (new \Swift_Message($obj))
                ->setFrom([$setFrom])
                ->setTo($setTo)
                ->setBody($msgHTML, 'text/html')
                ->addPart($msgPlain, 'text/plain');
        }
        // Send the message
        return $mailer->send($message);
    }
}

