<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordType;
use App\Form\UserAdminType;
use App\Form\UserType;
use App\Form\UserWithoutPasswordType;
use App\Repository\UserRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Mime\MimeTypes;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
    
            if ($existingUser) {
                $form->get('email')->addError(new FormError('This email is already registered.'));
                return $this->render('front/user/register.html.twig', [
                    'registrationForm' => $form->createView(),
                ]);
            }
    
            $file = $form->get('image')->getData();
            if($file)
            {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e){

                }
                $user->setImage($fileName);
            }
            else
            {
                $user->setImage("NoImage.png");
            }
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
    
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email
    
            return $this->redirectToRoute('app_login');
        }
    
        return $this->render('front/user/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
        #[Route('/admin/adduser', name: 'app_add_user_admin')]
    public function AddUserAdmin(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserAdminType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);

            if ($existingUser) {
                $form->get('email')->addError(new FormError('This email is already registered.'));
                return $this->render('back/user/adduser.html.twig', [
                    'form' => $form->createView(),
                ]);
            }

            $file = $form->get('image')->getData();
            if($file)
            {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e){

                }
                $user->setImage($fileName);
            }
            else
            {
                $user->setImage("NoImage.png");
            }
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_users_index_admin');
        }

        return $this->render('back/user/adduser.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/MonProfile', name: 'app_myprofile')]
    public function Myprofile(): Response
    {

        return $this->render('front/user/profile.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
    #[Route('/modifier-profil', name: 'app_edit_profile')]
    public function editProfile(Request $request,UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserWithoutPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            if($file)
            {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e){

                }
                $user->setImage($fileName);
            }
        
            $userRepository->updateUser($user, true);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_myprofile');
        }

        return $this->render('front/user/edit_profile.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }


    #[Route('/EditProfilePassword', name: 'app_edit_profile_password', methods: ['GET', 'POST'])]
    public function EditProfilePassword(Request $request,UserPasswordHasherInterface $userPasswordHasher,UserRepository $userRepository): Response
    {

        $user = $this->getUser();
        if(!$user)
        {
            return $this->redirectToRoute('app_login');
        }
        if($request->get("newpass")=="" && $request->get("confirmpass")=="")
        {
            $this->addFlash(
                'info-warning',
                'Password empty.'
            );
            return $this->render('index/profile.html.twig', [
                'user' => $user,
            ]);
        }
        else
        {
            if($request->get("newpass")==$request->get("confirmpass"))
            {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $request->get("newpass")
                    )
                );

                $userRepository->updateUserPassword($user, true);
                $this->addFlash(
                    'info-success',
                    'Password changed with success.'
                );

                return $this->render('index/profile.html.twig', [
                    'user' => $user,
                ]);
            }
            else
            {
                $this->addFlash(
                    'info-warning',
                    'Password dont match.'
                );
            }

            return $this->render('index/profile.html.twig', [
                'user' => $user,
            ]);
        }

    }


    #[Route('/reset-password/submitted', name: 'app_reset_password_submited')]
    public function resetPasswordSubmitted(Request $request, EntityManagerInterface $entityManager , MailerInterface $mailer)
    {

        $toemail = $request->get('email');
        $user = $entityManager->getRepository(User::class)->getUserByEmail($toemail);

        if ($user) {
            // Generate and save the reset code
            $resetCode = $this->generateResetCode();
            $user->setResetCode($resetCode);
            $entityManager->flush();

            // Send the reset code to the user's email (you need to implement this)
            //create a html template for the email
            $html = '
                    <html>
                        <body>
                            <p>Bonjour utilisateur,</p>
                            <p>Quelqu\'un a demandé un lien pour changer votre mot de passe. Vous pouvez le faire via le lien ci-dessous.</p>
                            <p><a href="http://127.0.0.1:8000/user/verify-reset-code/'.$resetCode.'">Changer mon mot de passe</a></p>
                            <p>Si vous n\'avez pas effectué cette demande, veuillez ignorer cet e-mail.</p>
                            <p>Votre mot de passe ne sera pas modifié tant que vous n\'aurez pas accédé au lien ci-dessus et créé un nouveau.</p>
                        </body>
                    </html>
                ';
            $email = (new Email())
                ->from('admingmail@gmail.com')
                ->to($toemail)
                ->subject('Reset Password')
                ->html($html);
            $mailer->send($email);

            return $this->redirectToRoute('app_login');
        }
        else
        {
            $this->addFlash(
                'error',
                'Email does not exist.'
            );

            return $this->redirectToRoute('reset_password');
        }

    }
    #[Route('/reset-password', name: 'reset_password')]
    public function resetPassword(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->render('front/user/reset_password.html.twig', []);
    }


    #[Route('/verify-reset-code/{resetCode}', name: 'verify_reset_code')]
    public function verifyResetCode(Request $request, $resetCode, EntityManagerInterface $entityManager ,UserPasswordHasherInterface $userPasswordHasher)
    {
        // Find the user by the reset code
        $user = $entityManager->getRepository(User::class)->getUserByResetCode(['resetCode' => $resetCode]);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(ChangePasswordType::class,$user);
        $form->handleRequest($request);
        $data = $form->getData();


        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $userPasswordHasher->hashPassword($user, $data->getPassword());
            $user->setPassword($hashedPassword);
            $user->setResetCode(null);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Mot de passe changer avec succéss.'
            );

            // Redirect or render a success message
            return $this->redirectToRoute('app_login');
        }

        return $this->render('front/user/verify_reset_code.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/resetPassword/profil', name: 'reset_password_profil')]
    public function resetPasswordProfile(Request $request, EntityManagerInterface $entityManager ,UserPasswordHasherInterface $userPasswordHasher)
    {
        $user = $this->getUser();

        if(!$user)
        return $this->redirectToRoute('app_login');

        $form = $this->createForm(ChangePasswordType::class,$user);
        $form->handleRequest($request);
        $data = $form->getData();


        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $userPasswordHasher->hashPassword($user, $data->getPassword());
            $user->setPassword($hashedPassword);
            $user->setResetCode(null);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Mot de passe changer avec succéss.'
            );

            return $this->redirectToRoute('app_myprofile');
        }

        return $this->render('front/user/verify_reset_code.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/admin/resetPassword/profil', name: 'reset_password_profil_admin')]
    public function resetPasswordProfileAdmin(Request $request, EntityManagerInterface $entityManager ,UserPasswordHasherInterface $userPasswordHasher)
    {
        $user = $this->getUser();

        $form = $this->createForm(ChangePasswordType::class,$user);
        $form->handleRequest($request);
        $data = $form->getData();


        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $userPasswordHasher->hashPassword($user, $data->getPassword());
            $user->setPassword($hashedPassword);
            $user->setResetCode(null);
            $entityManager->flush();

            $this->addFlash(
                'success',
                'Mot de passe changer avec succéss.'
            );

            return $this->redirectToRoute('app_myprofile_admin');
        }

        return $this->render('back/user/verify_reset_code.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    private function generateResetCode()
    {
        // Generate a unique reset code (you can customize the logic)
        return uniqid();
    }
    #[Route('/admin', name: 'app_users_index_admin')]
    public function showUsersAdmin(UserRepository $userRepository): Response
    {
        // Fetch user data from the repository
        $users = $userRepository->findAll();

        // Prepare data for the pie chart
        $data = [];
        $statuses = [];

        // Count the number of users for each status
        foreach ($users as $user) {
            $status = $user->getStatus(); // Assuming 'status' is a property of the User entity
            if (!isset($statuses[$status])) {
                $statuses[$status] = 1;
            } else {
                $statuses[$status]++;
            }
        }

        // Convert the status count into chart data format
        foreach ($statuses as $status => $count) {
            $data[] = [$status, $count];
        }

        // Create a new PieChart instance
        $pieChart = new PieChart();

        // Set chart data
        $pieChart->getData()->setArrayToDataTable([
            ['Status', 'Number of Users'],
            ...$data
        ]);

        // Set chart options
        $pieChart->getOptions()->setTitle('User Status Distribution');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        // Render the chart template with the chart data
        return $this->render('back/user/index.html.twig', [
            'users' => $users,
            'piechart' => $pieChart
        ]);
    }

    #[Route('/admin/MonProfile', name: 'app_myprofile_admin')]
    public function MyprofileAdmin(UserRepository $userRepository): Response
    {
        return $this->render('back/user/profile.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
    #[Route('/admin/modifier-profil', name: 'app_edit_profile_admin')]
    public function editProfileAdmin(Request $request,UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserWithoutPasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            if ($file) {
                $fileName = md5(uniqid()) . '.' . $file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {

                }
                $user->setImage($fileName);
            }
            $userRepository->updateUser($user, true);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_myprofile_admin');
        }

        return $this->render('back/user/edit_profile.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }

    #[Route('/admin/{id}/edit', name: 'app_user_edit_etat', methods: ['GET', 'POST'])]
    public function editEtat($id,UserRepository $userRepository ): Response
    {

        $user = $userRepository->getUserById($id);
        if($user->getStatus() == 'active') {
            $user->setStatus('inactive');
        }
        else
            $user->setStatus('active');
        //update user
        $userRepository->updateUser( $user, true);
        return $this->redirectToRoute('app_users_index_admin', [], Response::HTTP_SEE_OTHER);
    }

    #[Route("/{id}/user", name:"app_user_delete")]
    public function delete(EntityManagerInterface $entityManager,ManagerRegistry $doctrine,UserRepository $userRepository, $id)
    {

        $user = $userRepository->find($id);

        $entityyManager = $doctrine->getManager();
        $entityyManager->remove($user);
        $entityyManager->flush();

        $this->addFlash(
            'info-delete',
            'Deleted Successfully'
        );

        return $this->redirectToRoute('app_users_index_admin', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/profile/{id}", name="app_show_profile", methods={"GET"})
     */
    #[Route("/profile/show/{id}", name:"app_show_profile")]
    public function showProfile(User $user): Response
    {
        return $this->render('back/user/showProfile.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/r/search_user', name: 'search_user', methods: ['GET'])]
    public function searchUser(
        Request $request,
        SerializerInterface $serializer,
        UserRepository $userRepository
    ): Response {
        $searchValue = $request->query->get('searchValue');
        $orderId = $request->query->get('orderid');

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();

        $qb->select('e')
            ->from(User::class, 'e')
            ->where($qb->expr()->like('e.email', ':value'))
            ->orWhere($qb->expr()->like('e.nom', ':value'))
            ->orWhere($qb->expr()->like('e.prenom', ':value'))
            ->orWhere($qb->expr()->like('e.address', ':value'))
            ->setParameter('value', '%' . $searchValue . '%');

        if ($orderId === 'DESC') {
            $qb->orderBy('e.id', 'DESC');
        } else {
            $qb->orderBy('e.id', 'ASC');
        }

        $query = $qb->getQuery();
        $users = $query->getResult();


        // Serialize the data into JSON format
        $jsonData = $serializer->serialize($users, 'json', [
            'groups' => ['user:read']
        ]);
        return new JsonResponse($jsonData);

    }

}
