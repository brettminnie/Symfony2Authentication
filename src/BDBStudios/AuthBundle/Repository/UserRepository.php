<?php

namespace BDBStudios\AuthBundle\Repository;

use BDBStudios\AuthBundle\Entity\User;
use Doctrine\Orm\EntityRepository;
/**
 * Class UserRepository
 * @package BDBStudios\AuthBundle\Repository
 */
class UserRepository extends EntityRepository
{

    /**
     * @param User $user
     * @return array
     */
    public function findByEmail(User $user)
    {
        return $this->findBy(
            array('email' => $user->getEmail())
        );
    }

    /**
     * @param User $user
     * @return null|object
     */
    public function findById(User $user)
    {
        return $this->find($user->getId());
    }

    /**
     * @param User $user
     * @return User
     */
    public function createUpdate(User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
        $this->getEntityManager()->refresh($user);

        return $user;
    }

    /**
     * @param User $user
     * @return null
     */
    public function delete(User $user)
    {
        $this->getEntityManager()->remove($user);
        $this->getEntityManager()->flush();

        return null;
    }

}
