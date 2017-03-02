<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d7317cfedbafc56857cc32934a2f13d53ad8e0c2aed6a195b2ae3a0739a78efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_815eb59146e804205fb4b2ad24ffbcb5c71c4d0973d7f673c9352bbbadb5a343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815eb59146e804205fb4b2ad24ffbcb5c71c4d0973d7f673c9352bbbadb5a343->enter($__internal_815eb59146e804205fb4b2ad24ffbcb5c71c4d0973d7f673c9352bbbadb5a343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_815eb59146e804205fb4b2ad24ffbcb5c71c4d0973d7f673c9352bbbadb5a343->leave($__internal_815eb59146e804205fb4b2ad24ffbcb5c71c4d0973d7f673c9352bbbadb5a343_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44c5a8d769121026e0858fa04313b7d5a0a34e892b64d9a171b86a536a2dc739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c5a8d769121026e0858fa04313b7d5a0a34e892b64d9a171b86a536a2dc739->enter($__internal_44c5a8d769121026e0858fa04313b7d5a0a34e892b64d9a171b86a536a2dc739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_44c5a8d769121026e0858fa04313b7d5a0a34e892b64d9a171b86a536a2dc739->leave($__internal_44c5a8d769121026e0858fa04313b7d5a0a34e892b64d9a171b86a536a2dc739_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8717639faded1b47f7d8132f08fa224ea2632b4bdaf4af39b294e83f68ff296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8717639faded1b47f7d8132f08fa224ea2632b4bdaf4af39b294e83f68ff296->enter($__internal_d8717639faded1b47f7d8132f08fa224ea2632b4bdaf4af39b294e83f68ff296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d8717639faded1b47f7d8132f08fa224ea2632b4bdaf4af39b294e83f68ff296->leave($__internal_d8717639faded1b47f7d8132f08fa224ea2632b4bdaf4af39b294e83f68ff296_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1c89f6cc335b12b08bedf130e8fcd96ab9f4f4964a91b627576a5e784ef8bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c89f6cc335b12b08bedf130e8fcd96ab9f4f4964a91b627576a5e784ef8bd9->enter($__internal_b1c89f6cc335b12b08bedf130e8fcd96ab9f4f4964a91b627576a5e784ef8bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b1c89f6cc335b12b08bedf130e8fcd96ab9f4f4964a91b627576a5e784ef8bd9->leave($__internal_b1c89f6cc335b12b08bedf130e8fcd96ab9f4f4964a91b627576a5e784ef8bd9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\MtoMEmbCollecForm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
