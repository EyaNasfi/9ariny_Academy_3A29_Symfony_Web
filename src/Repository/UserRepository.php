<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 * @implements PasswordUpgraderInterface<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

//    /**
//     * @return User[] Returns an array of User objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    public function updateUser(?User $user, bool $true)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'UPDATE App\Entity\User u SET u.nom = :nom,u.prenom = :prenom, u.email = :email, u.image = :image, u.address = :address , u.status = :status WHERE u.iduser = :id'
        );
        $query->setParameter('id', $user->getIduser());
        $query->setParameter('nom',  $user->getNom());
        $query->setParameter('prenom',  $user->getPrenom());
        $query->setParameter('email',  $user->getEmail());
        $query->setParameter('image',  $user->getImage());
        $query->setParameter('address',  $user->getAddress());
        $query->setParameter('status',  $user->getStatus());

        return $query->getResult();
    }
    public function updateUserPassword(?User $user, bool $true)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'UPDATE App\Entity\User u SET u.password = :password WHERE u.id = :id'
        );
        $query->setParameter('id', $user->getId());
        $query->setParameter('password',  $user->getPassword());
        return $query->getResult();
    }

    public function remove(User $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getUserById($id)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.iduser = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }
    public function getUserByEmail($email)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.email = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getUserByResetCode($resetCode)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.resetCode = :resetCode')
            ->setParameter('resetCode', $resetCode)
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function findUser($Value, $order)
    {
        $em = $this->getEntityManager();
        if ($order == 'DESC') {
            $query = $em->createQuery(
                'SELECT r FROM App\Entity\User r   where r.name like :suj OR r.email like :suj  order by r.iduser DESC '
            );
            $query->setParameter('suj', $Value . '%');
        } else {
            $query = $em->createQuery(
                'SELECT r FROM App\Entity\User r   where r.name like :suj OR r.email like :suj  order by r.iduser ASC '
            );
            $query->setParameter('suj', $Value . '%');
        }
        return $query->getResult();
    }


}
