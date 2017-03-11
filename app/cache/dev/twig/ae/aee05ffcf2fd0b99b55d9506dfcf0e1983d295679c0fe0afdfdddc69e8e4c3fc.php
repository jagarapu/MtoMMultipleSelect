<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3e0a86995ab70f3c69a1b6ed17b2c008c3028cfc01b689244bc654dfe724a4ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c46005ab9752fed5af2ce15c891403f32ccad455e6e8bd373c591ea289ad8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c46005ab9752fed5af2ce15c891403f32ccad455e6e8bd373c591ea289ad8be->enter($__internal_7c46005ab9752fed5af2ce15c891403f32ccad455e6e8bd373c591ea289ad8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c46005ab9752fed5af2ce15c891403f32ccad455e6e8bd373c591ea289ad8be->leave($__internal_7c46005ab9752fed5af2ce15c891403f32ccad455e6e8bd373c591ea289ad8be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b650e59095cc8d969c8a8bf8028ff89e49d129c122a6db53cd1ee5a29a45ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b650e59095cc8d969c8a8bf8028ff89e49d129c122a6db53cd1ee5a29a45ac9->enter($__internal_3b650e59095cc8d969c8a8bf8028ff89e49d129c122a6db53cd1ee5a29a45ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b650e59095cc8d969c8a8bf8028ff89e49d129c122a6db53cd1ee5a29a45ac9->leave($__internal_3b650e59095cc8d969c8a8bf8028ff89e49d129c122a6db53cd1ee5a29a45ac9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_948da932fcf7eea107974cad6ad74b1ce27686a6f7fb5aad04a7439096d4e107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948da932fcf7eea107974cad6ad74b1ce27686a6f7fb5aad04a7439096d4e107->enter($__internal_948da932fcf7eea107974cad6ad74b1ce27686a6f7fb5aad04a7439096d4e107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_948da932fcf7eea107974cad6ad74b1ce27686a6f7fb5aad04a7439096d4e107->leave($__internal_948da932fcf7eea107974cad6ad74b1ce27686a6f7fb5aad04a7439096d4e107_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ad2886fecfe60c095a14ee7c3be3da3a3f53ce2facf09c4fdf91b90a1b38ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad2886fecfe60c095a14ee7c3be3da3a3f53ce2facf09c4fdf91b90a1b38ffb->enter($__internal_9ad2886fecfe60c095a14ee7c3be3da3a3f53ce2facf09c4fdf91b90a1b38ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ad2886fecfe60c095a14ee7c3be3da3a3f53ce2facf09c4fdf91b90a1b38ffb->leave($__internal_9ad2886fecfe60c095a14ee7c3be3da3a3f53ce2facf09c4fdf91b90a1b38ffb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\MtoMEmbCollecForm\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
