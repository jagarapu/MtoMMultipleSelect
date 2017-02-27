<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/** 
 * Task 
 * 
 * @ORM\Table(name="task") 
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
 */
class Task {

       /**     
        * @ORM\Id   
        * @ORM\Column(name="id", type="integer")      
        * @ORM\GeneratedValue(strategy="AUTO")    
        */   
         protected $id; 
          
          /** 
           *  @var string  
           *  @ORM\Column(name="firstname",length=100, type="string",nullable=true)     
           */    
         protected $firstname;
         
          /** 
           *  @var string  
           *  @ORM\Column(name="lastname",length=100, type="string",nullable=true)     
           */    
         protected $lastname;
          /**
             * @ORM\Column(name="sport", length=100,type="string",nullable=true)
             *
             */
         protected $sport;
         
         function getId() {
             return $this->id;
         }

         function getFirstname() {
             return $this->firstname;
         }

         function getLastname() {
             return $this->lastname;
         }

         function getSport() {
             return $this->sport;
         }
         
         function setId($id) {
             $this->id = $id;
         }

         function setFirstname($firstname) {
             $this->firstname = $firstname;
         }

         function setLastname($lastname) {
             $this->lastname = $lastname;
         }

         function setSport($sport) {
             $this->sport = $sport;
         }
}
