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
        $__internal_c9658a2f036217740beefc9c3ff8a196edf267311999b288557c42980bb9f8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9658a2f036217740beefc9c3ff8a196edf267311999b288557c42980bb9f8a7->enter($__internal_c9658a2f036217740beefc9c3ff8a196edf267311999b288557c42980bb9f8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9658a2f036217740beefc9c3ff8a196edf267311999b288557c42980bb9f8a7->leave($__internal_c9658a2f036217740beefc9c3ff8a196edf267311999b288557c42980bb9f8a7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bd641a13638481c78a6ebc2c731da5752d3f63fc7ab1bb304359da9d8851a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd641a13638481c78a6ebc2c731da5752d3f63fc7ab1bb304359da9d8851a93->enter($__internal_9bd641a13638481c78a6ebc2c731da5752d3f63fc7ab1bb304359da9d8851a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
    <h1>Success!</h1>   
    <p>Your details have been submitted!</p> 
";
        
        $__internal_9bd641a13638481c78a6ebc2c731da5752d3f63fc7ab1bb304359da9d8851a93->leave($__internal_9bd641a13638481c78a6ebc2c731da5752d3f63fc7ab1bb304359da9d8851a93_prof);

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
