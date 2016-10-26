<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="This email address is already in use")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id;
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $password;

    public function getId() {
        return $this->id;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function getFirstName() {
        return $this->first_name;
    }
    
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role = null) {
        $this->role = $role;
    }

    public function getRoles() {
        return [$this->getRole()];
    }

    public function eraseCredentials() {
        return null;
    }

    public function getSalt() {
        return null;
    }

}
