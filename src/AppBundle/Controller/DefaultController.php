<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; 
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;

class DefaultController extends Controller {   
    /**   
     * @Route("/", name="homepage")   
     */  
    public function indexAction(Request $request) {   
        $em = $this->getDoctrine()->getManager();   
//        $req = $request->isXmlHttpRequest();
//        var_dump($req);
//        exit;
        if($request->isXmlHttpRequest()){
            
            $categoryId = $request->request->get('cat_id');                                
            $tags = $this->getDoctrine()->getRepository('AppBundle:Tag') ->getTagsByCategory($categoryId);
           return $tags_json = new Response(json_encode($tags));   
           }
        $logger = $this->get('logger');    
        $category = new Category(); 
        $selectedcategory = $em->getRepository('AppBundle:Category')->findOneBy(array('id' => 1));
        $form = $this->createForm(new CategoryType($selectedcategory), $category);
        $form->handleRequest($request);       
        if ($form->isValid()) {
            $categoryId = $category->getCategoryname()->getId();                    
            $cat = $em->getRepository('AppBundle:Category')->findOneBy(array('id' => $categoryId));
            $related_tags_arr = $cat->getTags()->getValues();
            for ($k = 0; $k < count($related_tags_arr); $k++) {  
            $cat->removeTag($related_tags_arr[$k]);                      
                }
            $selected_tags = $category->getTags()[0];
//            $log1 = $logger->info('selected_tags'. $selected_tags);
//            var_dump($log1);exit;
            if (!empty($selected_tags)) {         
                $tags_arr = $selected_tags->getTagname(); 
                foreach ($tags_arr as $tag) {     
                $cat->addTag($tag);
                    }          
              }
            $em->persist($cat);  
            $em->flush();
            return $this->redirectToRoute('successpage');   
            }
 return $this->render('default/index.html.twig', array( 'form' => $form->createView(), ));
 }
 
  /**    
   * @Route("/success", options={"expose"=true}, name="successpage")      
   */ 
 public function successAction(Request $request) {    
        return $this->render('default/success.html.twig', array()  );
    }
    
    /**   
     * @Route("/task", name="task")    
     */
 public function newAction(Request $request){
        $task = new Task();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Task');
        $subrecord = $repository->findOneById(array('id' => 60));      
//    $logger = $this->get('logger');
//    $logger->info('I just got the logger');
//    $logger->error('An error occurred');
//    $logger->critical('I left the oven on!', array(
//        // include extra "context" info in your logs
//        'cause' => 'in_hurry',
//    ));
              
       if (!empty($subrecord)) {
           // $exists = true;
            if ($subrecord->getFirstname() != null || $subrecord->getFirstname() != '') {
                $firstname = $subrecord->getFirstname();
            } else {
                $firstname = '';
            }
            if (($subrecord->getLastname() != null || $subrecord->getLastname() != '')) {
                $lastname = $subrecord->getLastname();
            } else {
                $lastname = '';
            }
            if (($subrecord->getSport() != null || $subrecord->getSport() != '')) {
                $sport = $subrecord->getSport();
            } else {
                $sport = '';
            }           
        }
        
        $form = $this->createForm(new TaskType($subrecord), $task);       
        $form->handleRequest($request);
          
        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
            $subrecord->setFirstname($task->getFirstname());
            $subrecord->setLastname($task->getLastname());
            $subrecord->setSport($task->getSport());
            $em->persist($subrecord);
            $em->flush();
            return $this->render('default/success.html.twig', array()  );                    
        }
        return $this->render(
            'default/new.html.twig',
            array('form' => $form->createView())
        );
 }
 
}