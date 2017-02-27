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
        $__internal_5cfde0fcf0d5f3ff68198afd0dbbc3175041273ad97aa7140351be8ded2de487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfde0fcf0d5f3ff68198afd0dbbc3175041273ad97aa7140351be8ded2de487->enter($__internal_5cfde0fcf0d5f3ff68198afd0dbbc3175041273ad97aa7140351be8ded2de487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfde0fcf0d5f3ff68198afd0dbbc3175041273ad97aa7140351be8ded2de487->leave($__internal_5cfde0fcf0d5f3ff68198afd0dbbc3175041273ad97aa7140351be8ded2de487_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b44be1b4c0179569066f1015cf4e1b32bd0fa53b7550a860be97a558665d2c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44be1b4c0179569066f1015cf4e1b32bd0fa53b7550a860be97a558665d2c5c->enter($__internal_b44be1b4c0179569066f1015cf4e1b32bd0fa53b7550a860be97a558665d2c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b44be1b4c0179569066f1015cf4e1b32bd0fa53b7550a860be97a558665d2c5c->leave($__internal_b44be1b4c0179569066f1015cf4e1b32bd0fa53b7550a860be97a558665d2c5c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0542713d4c0e038419a1547c8178f5bb74e103e6cc377a210d6e222e20822415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0542713d4c0e038419a1547c8178f5bb74e103e6cc377a210d6e222e20822415->enter($__internal_0542713d4c0e038419a1547c8178f5bb74e103e6cc377a210d6e222e20822415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0542713d4c0e038419a1547c8178f5bb74e103e6cc377a210d6e222e20822415->leave($__internal_0542713d4c0e038419a1547c8178f5bb74e103e6cc377a210d6e222e20822415_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f034cb0670df80db22e089386837085b8754cc878406107947214dae3a03e855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f034cb0670df80db22e089386837085b8754cc878406107947214dae3a03e855->enter($__internal_f034cb0670df80db22e089386837085b8754cc878406107947214dae3a03e855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f034cb0670df80db22e089386837085b8754cc878406107947214dae3a03e855->leave($__internal_f034cb0670df80db22e089386837085b8754cc878406107947214dae3a03e855_prof);

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
