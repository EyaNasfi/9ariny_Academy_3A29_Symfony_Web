<?php

namespace App\Controller;
use App\Entity\Payment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Stripe\Checkout\Session;

class PaymentController extends AbstractController
{
    private $params;
   

    private $pdfGenerator;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    #[Route('/payment', name: 'app_payment')]
    public function index(): Response
    {
        return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController',
        ]);
    }

    #[Route('/checkout', name: 'checkout')]
    public function checkout(): Response
    {
        $stripeSK = $this->params->get('stripe_secret_key');
        Stripe::setApiKey($stripeSK);

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items'           => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            'name' => 'Formation',
                        ],
                        'unit_amount'  => 2000,
                    ],
                    'quantity'   => 1,
                ]
            ],
            'mode'                 => 'payment',
            'success_url'          => $this->generateUrl('success_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url'           => $this->generateUrl('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        

        return $this->redirect($session->url, 303);
    }

    #[Route('/success-url', name: 'success_url')]
    public function successUrl(Request $request): Response
    {
        $stripeSK = $this->params->get('stripe_secret_key');
        Stripe::setApiKey($stripeSK);
    
        $email = $request->query->get('email');
        // Check if email is null, set a default email if needed
        $email = $email ?? 'mohamedelarbin@gmail.com'; // Replace 'default@example.com' with your default email
    
        $paymentDate = new \DateTime();
    
        // Create a new Payment entity
        $payment = new Payment();
        $payment->setMontant(200); // Amount is always 200 USD
        $payment->setMoyendepaiement('visa'); // Moyen de paiement is always 'visa'
        $payment->setEmail($email);
        $payment->setDate($paymentDate);
    
        // Persist the payment entity to the database
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($payment);
        $entityManager->flush();
    
        return $this->render('payment/success.html.twig', [
            'montant' => $payment->getMontant(),
        'moyenDePaiement' => $payment->getMoyendepaiement(),
        'email' => $payment->getEmail(),
        'date' => $payment->getDate(),
        ]);
    }

    #[Route('/cancel-url', name: 'cancel_url')]
    public function cancelUrl(): Response
    {
        return $this->render('payment/cancel.html.twig', []);
    }
}
