<?php

/* default/success.html.twig */
class __TwigTemplate_67550975b647b6a023d21229e09cabbcd55aade027a301b9774a7d1fd3f74444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/success.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f2f4c7760fb1137e0e7974ece2d8f0717e1b13d9481a8d7442fcc8369371d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2f4c7760fb1137e0e7974ece2d8f0717e1b13d9481a8d7442fcc8369371d42->enter($__internal_8f2f4c7760fb1137e0e7974ece2d8f0717e1b13d9481a8d7442fcc8369371d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2f4c7760fb1137e0e7974ece2d8f0717e1b13d9481a8d7442fcc8369371d42->leave($__internal_8f2f4c7760fb1137e0e7974ece2d8f0717e1b13d9481a8d7442fcc8369371d42_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e93a7e3ebe03f6e7d5251fa906d0d319f5b0a004d47c3a550707bb017529fc9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93a7e3ebe03f6e7d5251fa906d0d319f5b0a004d47c3a550707bb017529fc9e->enter($__internal_e93a7e3ebe03f6e7d5251fa906d0d319f5b0a004d47c3a550707bb017529fc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    <h1>Success!</h1> 
    <p>Your details have been submitted!</p> 
";
        
        $__internal_e93a7e3ebe03f6e7d5251fa906d0d319f5b0a004d47c3a550707bb017529fc9e->leave($__internal_e93a7e3ebe03f6e7d5251fa906d0d319f5b0a004d47c3a550707bb017529fc9e_prof);

    }

    public function getTemplateName()
    {
        return "default/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %} 
    <h1>Success!</h1> 
    <p>Your details have been submitted!</p> 
{% endblock %}", "default/success.html.twig", "C:\\xampp\\htdocs\\MtoMEmbCollecForm\\app\\Resources\\views\\default\\success.html.twig");
    }
}
