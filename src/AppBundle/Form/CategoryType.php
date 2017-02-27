<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Form\TagType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType{
    protected $category;
    public function __construct(Category $category = null) {  
      $this->category = $category; 
      }
   public function buildForm(FormBuilderInterface $builder, array $options){
   $builder->add('categoryname', EntityType::class, array(  
       'class' => 'AppBundle:Category',  
       'query_builder' => function(EntityRepository $er) {
       return $er->createQueryBuilder('c')  
           ->orderBy('c.id', 'ASC');    
       },          
            'choice_label' => 'categoryname',     
            'expanded' => false,         
            'multiple' => false,      
            'label' => 'Choose Category',    
            'data' => $this->category,        
            ));
       
  $builder->add('tags', CollectionType::class, array(  
     'entry_type' => new TagType($this->category->getTags()->getValues()), 
     'allow_add' => true,      
     'by_reference' => false,     
     ));
 $builder->add('save', SubmitType::class, array('label' => 'Submit'));
}
 public function configureOptions(OptionsResolver $resolver) {  
     $resolver->setDefaults(array(         
         'data_class' => 'AppBundle\Entity\Category',    
         )); 
     }
}