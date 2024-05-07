<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

   

    public function sendEmail($message,$email): void
    {
        $email = (new Email())
            ->from('firas.guesmi93806411@gmail.com')
            ->to($email)
            ->subject('notif')
            ->text($message) 
            ->html('<p>' . $message . '</p>'); 
    
        $this->mailer->send($email);
    }

    
   
    
}