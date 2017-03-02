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
        $__internal_4b27d35d666840b7fc55a53c614b8de11c3eaa3f93b111aba3353635a49049eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b27d35d666840b7fc55a53c614b8de11c3eaa3f93b111aba3353635a49049eb->enter($__internal_4b27d35d666840b7fc55a53c614b8de11c3eaa3f93b111aba3353635a49049eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b27d35d666840b7fc55a53c614b8de11c3eaa3f93b111aba3353635a49049eb->leave($__internal_4b27d35d666840b7fc55a53c614b8de11c3eaa3f93b111aba3353635a49049eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa88b82910bffd83dc243ae7d36510104f7d17f4d0511b4a6a937c8a0f9c1f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa88b82910bffd83dc243ae7d36510104f7d17f4d0511b4a6a937c8a0f9c1f51->enter($__internal_fa88b82910bffd83dc243ae7d36510104f7d17f4d0511b4a6a937c8a0f9c1f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa88b82910bffd83dc243ae7d36510104f7d17f4d0511b4a6a937c8a0f9c1f51->leave($__internal_fa88b82910bffd83dc243ae7d36510104f7d17f4d0511b4a6a937c8a0f9c1f51_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c78825cefb4c2d7e0c768b18a4b714f2dc128040fd3c1cb00495100932939c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78825cefb4c2d7e0c768b18a4b714f2dc128040fd3c1cb00495100932939c5f->enter($__internal_c78825cefb4c2d7e0c768b18a4b714f2dc128040fd3c1cb00495100932939c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c78825cefb4c2d7e0c768b18a4b714f2dc128040fd3c1cb00495100932939c5f->leave($__internal_c78825cefb4c2d7e0c768b18a4b714f2dc128040fd3c1cb00495100932939c5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc61172cf8fd26eeeaea9fd7667017d995e4e6edd1b25e6ba13ef94be54a340d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc61172cf8fd26eeeaea9fd7667017d995e4e6edd1b25e6ba13ef94be54a340d->enter($__internal_fc61172cf8fd26eeeaea9fd7667017d995e4e6edd1b25e6ba13ef94be54a340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc61172cf8fd26eeeaea9fd7667017d995e4e6edd1b25e6ba13ef94be54a340d->leave($__internal_fc61172cf8fd26eeeaea9fd7667017d995e4e6edd1b25e6ba13ef94be54a340d_prof);

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
