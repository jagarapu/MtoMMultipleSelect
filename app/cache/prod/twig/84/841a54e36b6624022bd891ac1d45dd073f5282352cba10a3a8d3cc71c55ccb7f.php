<?php

/* default/success.html.twig */
class __TwigTemplate_71b97d63902f77d0b2f901f12df401692493f4d7d427098ed661d06d9f751be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
namespace AppBundle\\Controller;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller; 
use Symfony\\Component\\HttpFoundation\\Request;
use AppBundle\\Entity\\Category;
use AppBundle\\Form\\CategoryType;
//use AppBundle\\Entity\\Tag;
//use AppBundle\\Entity\\TagType;
class DefaultController extends Controller  {
    /**     
     *  @Route(\"/\", name=\"homepage\")   
     * 
     */   
    public function indexAction(Request \$request)    {   
        
        \$category = new Category();

        \$form = \$this->createForm(CategoryType::class, \$category);

        \$form->handleRequest(\$request);
        
        if (\$form->isValid()) {

            \$em = \$this->getDoctrine()->getManager();
            \$em->persist(\$form);
            \$em->flush();
            
           // return \$this->redirectToRoute('successpage');
        }

        return \$this->render('default/index.html.twig', array(
                    'form' => \$form->createView(),
        ));
    }
}

";
    }

    public function getTemplateName()
    {
        return "default/success.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* namespace AppBundle\Controller;*/
/* use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;*/
/* use Symfony\Bundle\FrameworkBundle\Controller\Controller; */
/* use Symfony\Component\HttpFoundation\Request;*/
/* use AppBundle\Entity\Category;*/
/* use AppBundle\Form\CategoryType;*/
/* //use AppBundle\Entity\Tag;*/
/* //use AppBundle\Entity\TagType;*/
/* class DefaultController extends Controller  {*/
/*     /**     */
/*      *  @Route("/", name="homepage")   */
/*      * */
/*      *//*    */
/*     public function indexAction(Request $request)    {   */
/*         */
/*         $category = new Category();*/
/* */
/*         $form = $this->createForm(CategoryType::class, $category);*/
/* */
/*         $form->handleRequest($request);*/
/*         */
/*         if ($form->isValid()) {*/
/* */
/*             $em = $this->getDoctrine()->getManager();*/
/*             $em->persist($form);*/
/*             $em->flush();*/
/*             */
/*            // return $this->redirectToRoute('successpage');*/
/*         }*/
/* */
/*         return $this->render('default/index.html.twig', array(*/
/*                     'form' => $form->createView(),*/
/*         ));*/
/*     }*/
/* }*/
/* */
/* */
