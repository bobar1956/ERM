<?php

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;
class User extends BaseUser
{  
    private $service;
    
     private $bu;
    /**
     * @var integer $id
     */
    protected $id;
    protected $matricule;
    
    protected $diploma;
    
    protected $specialtyDiploma;
    
    protected $currentFunction;
   
    
    public function getMatricule() {
        return $this->matricule;
    }

    public function getDiploma() {
        return $this->diploma;
    }

    public function getSpecialtyDiploma() {
        return $this->specialtyDiploma;
    }

    public function getCurrentFunction() {
        return $this->currentFunction;
    }

    public function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    public function setDiploma($diploma) {
        $this->diploma = $diploma;
    }

    public function setSpecialtyDiploma($specialtyDiploma) {
        $this->specialtyDiploma = $specialtyDiploma;
    }

    public function setCurrentFunction($currentFunction) {
        $this->currentFunction= $currentFunction;
   
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
    public function setBu(\Acme\DemoBundle\Entity\BU $bu)
    {
        $this->bu = $bu;

        return $this;
    }
public function getBu()
    {
        return $this->bu;
    }
    public function setService(\Acme\DemoBundle\Entity\Service $service)
    {
        $this->service = $service;

        return $this;
    }
public function getService()
    {
        return $this->service;
    }
    
   
   

    /**
     * Constructor
     */
    public function __construct()
    {   parent::__construct();
        $this->userFunction = new \Doctrine\Common\Collections\ArrayCollection();
      
    }

    /**
     * Add userFunction
     *
     * @param \Acme\DemoBundle\Entity\UserFunction $userFunction
     * @return User
     */
    public function addUserFunction(\Acme\DemoBundle\Entity\UserFunction $userFunction)
    {
        $this->userFunction[] = $userFunction;

        return $this;
    }

    /**
     * Remove userFunction
     *
     * @param \Acme\DemoBundle\Entity\UserFunction $userFunction
     */
    public function removeUserFunction(\Acme\DemoBundle\Entity\UserFunction $userFunction)
    {
        $this->userFunction->removeElement($userFunction);
    }

    /**
     * Get userFunction
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserFunction()
    {
        return $this->userFunction;
    }

    
    
}
