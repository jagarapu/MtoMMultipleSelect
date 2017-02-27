<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use AppBundle\Entity\Task;

class TaskType extends AbstractType {
    protected $task;   
    public function __construct($task){            
        $this->task = $task;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        if (!empty($this->task)){
           if($this->task->getFirstname() == null){
                $firstname = '';   
           }
           else {
               $firstname = $this->task->getFirstname();
//               var_dump($firstname);
//               exit;
               //$firstname = $this->task->setFirstname('somesh');
           }
        if($this->task->getLastname() == null){
                $lastname = '';   
           }
           else {
               $lastname = $this->task->getLastname();
               //$lastname = $this->task->setLastname('jagarapu');
           }
        if($this->task->getSport() == null){
                $sport = '';   
           }
           else {
              $sport = $this->task->getSport();
              //$sport = $this->task->setSport('Volleybal');
           }
        }
         else {
           $firstname = '';
           $lastname = '';
           $sport = '';
       }
         //First Name
        $builder->add('firstname', 'text', array(
            'attr' => array('class' => 'large_text'),
            'label' => 'First Name',
            'required' => true,
            'error_bubbling' => false,
            'data' =>$firstname,
            
        ));        
        
        //Last Name
        $builder->add('lastname', 'text', array(
            'attr' => array('class' => 'large_text'),
            'label' => 'Lastname',
            'required' => true,
            'error_bubbling' => false,
            'data' => $lastname,
        ));  
        
        //Sports Name
        $builder->add('sport', ChoiceType::class, array(
            'label' => 'Sport',
                'choices' => array(
                  'Cricket' => 'Cricket',
                  'FootBall' => 'FootBall',
                  'Kabaddi' => 'Kabaddi',
                  'Volleybal' => 'Volleybal'  
                ),
                'multiple' => false,
                'expanded' => true,
                'data' => $sport,
            ));     
        
        $builder ->add('save', SubmitType::class);
    }
   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Task',
        ));
    } 
}
