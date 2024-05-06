<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Form\MailFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;

class MailController extends AbstractController
{
    
     /**
     * @Route("/send-mail", name="send_mail")
     */
    public function sendMail(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(MailFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $email = $data['email']; // Assign the recipient's email from the form to the $email variable

            // Create the HTML content for the email (assuming you have a template at 'mail/confirmation.html.twig')
            $htmlContent = $this->renderView('mail/confirmation.html.twig', ['data' => $data]);

            // Configure the mailer transport (replace with your own email settings)
            $transport = Transport::fromDsn('smtp://mohamedelarbin@gmail.com:trpxdpgywkivztoa@smtp.gmail.com:587');
            $mailer = new Mailer($transport);

            // Create the email message
            $emailMessage = (new Email())
                ->from('mohamedelarbin@gmail.com')
                ->to($email) // Use the email from the form
                ->subject('Votre remise a été confirmée!')
                ->html($htmlContent);

            // Send the email
            $mailer->send($emailMessage);

                
        }

        return $this->render('mail/send.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    }
        
        

