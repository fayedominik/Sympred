<?php
/**
 * Created by PhpStorm.
 * User: Dominique
 * Date: 25/03/14
 * Time: 01:06
 */

namespace Pred\DemandeBundle\Entity {


    use Doctrine\ORM\EntityRepository;
    use Doctrine\ORM\NoResultException;
    use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
    use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
    use Symfony\Component\Security\Core\User\UserInterface;
    use Symfony\Component\Security\Core\User\UserProviderInterface;

    class EtablissementRepository extends EntityRepository implements UserProviderInterface{
        public function loadUserByUsername($username){
            $q = $this->createQueryBuilder('e')
                ->where('e.username = :username OR e.email = :email')
                ->setParameter('username', $username)
                ->setParameter('email', $username)
                ->getQuery();

            try {
                $user = $q->getSingleResult();
            }catch (NoResultException $e) {
                throw new UsernameNotFoundException(sprintf('User Not Found'));
            }

            return $user;
            //return $this->loadUserByEmail($username);
        }


        public function refreshUser(UserInterface $user)
        {
            $class = get_class($user);
            if (!$this->supportsClass($class)) {
                throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $class));
            }
            return $this->find($user->getId());
        }

        public function supportsClass($class)
        {
            return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
        }

    }
}