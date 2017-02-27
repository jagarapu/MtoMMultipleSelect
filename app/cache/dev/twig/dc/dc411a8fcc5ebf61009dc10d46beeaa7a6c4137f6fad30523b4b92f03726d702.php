<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c415de71aae31a85575782229686cec11267c1102bc4456a80f9bf7661c7088d extends Twig_Template
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
        $__internal_c87f069b38392767201bb9860c98f4f2ab3c8d681ded134f73a414824bb78206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87f069b38392767201bb9860c98f4f2ab3c8d681ded134f73a414824bb78206->enter($__internal_c87f069b38392767201bb9860c98f4f2ab3c8d681ded134f73a414824bb78206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c87f069b38392767201bb9860c98f4f2ab3c8d681ded134f73a414824bb78206->leave($__internal_c87f069b38392767201bb9860c98f4f2ab3c8d681ded134f73a414824bb78206_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b67642601a82db4a74125a7f80e1406931119b09475d5b305e37390fc9ba39c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67642601a82db4a74125a7f80e1406931119b09475d5b305e37390fc9ba39c2->enter($__internal_b67642601a82db4a74125a7f80e1406931119b09475d5b305e37390fc9ba39c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b67642601a82db4a74125a7f80e1406931119b09475d5b305e37390fc9ba39c2->leave($__internal_b67642601a82db4a74125a7f80e1406931119b09475d5b305e37390fc9ba39c2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ebcb0b2aa0f5029660e7abd9d079dbba864008435d860fd9e86697235b8e0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebcb0b2aa0f5029660e7abd9d079dbba864008435d860fd9e86697235b8e0d6->enter($__internal_5ebcb0b2aa0f5029660e7abd9d079dbba864008435d860fd9e86697235b8e0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ebcb0b2aa0f5029660e7abd9d079dbba864008435d860fd9e86697235b8e0d6->leave($__internal_5ebcb0b2aa0f5029660e7abd9d079dbba864008435d860fd9e86697235b8e0d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab2b08a3c7fb91ce39e1e61b4718ae5f9a44b84b70730d27d75fa23cd0a5919f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2b08a3c7fb91ce39e1e61b4718ae5f9a44b84b70730d27d75fa23cd0a5919f->enter($__internal_ab2b08a3c7fb91ce39e1e61b4718ae5f9a44b84b70730d27d75fa23cd0a5919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab2b08a3c7fb91ce39e1e61b4718ae5f9a44b84b70730d27d75fa23cd0a5919f->leave($__internal_ab2b08a3c7fb91ce39e1e61b4718ae5f9a44b84b70730d27d75fa23cd0a5919f_prof);

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
