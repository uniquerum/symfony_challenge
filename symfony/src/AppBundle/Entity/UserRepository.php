<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository {

    public function findByEmail($email) {
	$query = $this->getEntityManager()
            ->createQuery("SELECT * FROM USER WHERE email = :email")
            ->setParameter('email', $email);
        return $query->getOneOrNullResult();
    }

}
