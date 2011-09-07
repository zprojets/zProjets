<?php
namespace zProjets\Bundle\UserBundle\Entity;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\generatedValue(strategy="AUTO")
    */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="zProjets\Bundle\UserBundle\Entity\Group")
     */
    protected $group;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $hide_email = true;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $signature;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $biography;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $avatar;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $quote;
    
    /**
     * @ORM\Column(type="integer", length=11)
     */
    protected $time_zone;
    
    

    public function __construct()
    {
        parent::__construct();
    }
    
    public function getSignature() 
    {
        return $this->signature;
    }
    
    public function setSignature($signature) 
    {
        $this->signature = $signature;
    }
    
    public function getBiography() 
    {
        return $this->biography;
    }
    
    public function setBiography($biography) 
    {
        $this->biography = $biography;
    }
    
    public function getAvatar() 
    {
        return $this->avatar;
    }
    
    public function setAvatar($avatar) 
    {
        $this->avatar = $avatar;
    }
    
    public function getQuote() 
    {
        return $this->quote;
    }
    
    public function setQuote($quote) 
    {
        $this->quote = $quote;
    }
    
    public function getTimeZone() 
    {
        return $this->time_zone;
    }
    
    public function setTimeZone($timeZone) 
    {
        $this->time_zone = $timeZone;
    }
    
}